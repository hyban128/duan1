<?php
session_start();

include "model/pdo.php";
include "model/danhmuc.php";
include "model/hanghoa.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/sanphambt.php";
include "model/giohang.php";
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];

$size=loadAll_size();
$color=loadAll_color();
$spnew=loadAll_view();/*goi ham ben model/sanpham */
$danhmuc=loadAll_danhmuc();
include "View/header.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            include "View/home.php";
            break;
       
        case 'gioithieu':
            include "View/gioithieu.php";
            break;
        case 'lienhe':
            include "View/lienhe.php";
            break;
        case 'hoidap':
            include "View/hoidap.php";
            break;
        case 'giohang':

            include "View/cart/viewcart.php";
            break;
        case 'chitietsp':
            $err=[];
            if(isset($_POST['guibinhluan'])){
                $iduser=$_SESSION['taikhoan']['id_user'];
                $noidung=$_POST['noidung'];
                 $date=date('Y-m-d');
                 if(empty($noidung)){
                    $err['noidung']="Bạn chưa nhập gì";
                 }else{
                    insert_binhluan($_POST['idpro'], $_POST['noidung'],$iduser,$date);

                 }
            }
            
            if(isset($_GET['idsp'])){
                $id=$_GET['idsp'];
                $onesp=loadOne_sanpham($id);
                extract($onesp);
              $sp_cungloai= load_sp_cungloai($id,$iddm);

                    $spbt= getone_spbt_sp($id);
                

                // $spbt_sp= getone_spbt_sp($id);
                // extract($spbt_sp);

               $binhluan=load_binhluan($id);
               luotxem($id);
               
               
                
            }else{
                include "View/home.php";
            }          

            include "View/chitietsanpham.php";
            break;

       
       
        
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user=$_POST['user'];
                $pass = $_POST['pass'];
                // $nhaplai=$_POST['passlai'];
               $dangky= insert_dangky($email,$user,$pass);
                 header("location:index.php?act=dangnhap");
               
               }
            
            include "View/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $err = [];
                $checkuser = check_user($email, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['taikhoan'] = $checkuser;
                    header("location:index.php?act=trangchu");
                } else if (empty($email) && empty($pass)) {
                    $err['err'] = "Vui lòng nhập thông tin";
                } else {
                    $thongbao = "Sai thông tin đăng nhập";
                }
            }
            include "View/taikhoan/dangnhap.php";

            break;
        case 'updatetk':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $user=$_POST['user'];
                $email=$_POST['email'];
                $diachi=$_POST['address'];
                $phone=$_POST['phone'];
                $id=$_POST['id'];
                $hinh=$_FILES['avata'];
                $image=$hinh['name'];
                $target_div="upload/";
                $target_file=$target_div.$image;
                move_uploaded_file($hinh['tmp_name'], $target_file);
                             
                    $id=$_POST['id'];
                update_tkView($id,$user,$email,$image,$diachi,$phone);
               
                $_SESSION['taikhoan']=check_user($email,$pass);
                header("location:index.php?act=logout");
                $_SESSION['ok']="Vui lòng đăng nhập lại";
                
            }

            include "View/taikhoan/thongtin.php";
            break;

        case 'logout':
            unset($_SESSION['taikhoan']);
             header("location:index.php?act=trangchu");
            include "View/header.php";
            break;
        case 'doimk':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $pass = $_POST['pass'];
                $passnew=$_POST['pass1'];
                $passlai=$_POST['pass2'];
                $id=$_POST['id'];
                    // var_dump($checkuser);
              if ( empty($pass)) {
                    $thongbao = "Vui lòng nhập thông tin";
                } else if($pass!=$_SESSION['taikhoan']['pass']){
                    $thongbao = "Mật khẩu không đúng";
                }else if($passnew==$passlai){
                    update_pass($passnew,$id);
                    $thongbao="Thay đổi thành công";
                    unset($_SESSION['taikhoan']);
                    header("location:index.php?act=dangnhap");

                }else{
                    $thongbao="Mật khẩu không trúng";
                }
            }
            // update_pass();
            include "View/taikhoan/doimatkhau.php";
            break;
        case 'quenmk':
            if(isset($_POST['guiemail']) &&$_POST['guiemail']){
                $email=$_POST['email'];
                     $sendmailMess= check_email($email);
            }
            include "View/taikhoan/quenmk.php";
            break;
        case 'thongtin':
            include "View/taikhoan/thongtin.php";
            break;
        case 'donhang':
            include "View/taikhoan/donhang.php";
            break;
        /*sanpham */
        case 'sanpham': 
            if(isset($_POST['kyw'])&& $_POST['kyw']!=""){/*tim kiem san pham*/
                    $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            
            if(isset($_GET['iddm'])){/*lay san pham theo danh muc*/
                $iddm=$_GET['iddm'];
                
            }else{
                $iddm="";
            }
           
                $ds_sanpham=loadAll_sanpham($kyw,$iddm);
                $ten=load_tendm($iddm);
                include "View/danhmuc_sanpham.php";
            break;
        case 'tren300':
            if(isset($_POST['kyw'])&& $_POST['kyw']!=""){/*tim kiem san pham*/
                $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        
        if(isset($_GET['iddm'])){/*lay san pham theo danh muc*/
            $iddm=$_GET['iddm'];
            
        }else{
            $iddm="";
        }
        $ten=load_tendm($iddm);

            $ds_sanpham=giacao();

            include "View/danhmuc_sanpham.php";
            break;
     case 'duoi100':
                if(isset($_POST['kyw'])&& $_POST['kyw']!=""){/*tim kiem san pham*/
                    $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            
            if(isset($_GET['iddm'])){/*lay san pham theo danh muc*/
                $iddm=$_GET['iddm'];
                
            }else{
                $iddm="";
            }
            $ten=load_tendm($iddm);
    
                $ds_sanpham=giaduoi100();
    
                include "View/danhmuc_sanpham.php";
                break;
     case '100den200':
                    if(isset($_POST['kyw'])&& $_POST['kyw']!=""){/*tim kiem san pham*/
                        $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                
                if(isset($_GET['iddm'])){/*lay san pham theo danh muc*/
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm="";
                }
                $ten=load_tendm($iddm);
        
                    $ds_sanpham= gianuagiua();
        
                    include "View/danhmuc_sanpham.php";
                    break;
       /*gio hang */
       case 'viewcart':
                
        include "View/cart/viewcart.php";
        
        break;
        case 'addcart':
            // if(isset($_GET['idsp'])){
            //     $id=$_GET['idsp'];
            //     $onesp=loadOne_sanpham($id);
            //     extract($onesp);
            //   $sp_cungloai= load_sp_cungloai($id,$iddm);

                
            // }
          

            if(isset($_POST['addcart']) &&$_POST['addcart']){
                $id=$_POST['id'];
                  $name=$_POST['name'];
                  $img=$_POST['img'];
                  $price=$_POST['price'];
                  $soluong=$_POST['soluong'];

                    $color=$_POST['color'];
                    $size=$_POST['size'];
                    $spbt= getone_spbt_sp($id);

                  
                  $i=0;
                  $fg=0;

                  $tien=$price*$soluong;
                  foreach ($_SESSION['cart'] as $cart) {
                    if($cart[1]==$name){
                        $slnew=$soluong+$cart[4];


                        
                        $_SESSION['cart'][$i][4]=$slnew;
                        $fg=1;
                        break;
                    }
                    $i++;
                }
                if($fg==0){
                    $spadd=[$id,$name,$img,$price,$soluong,$color,$size,$tien];/*vi tri mang 0123456 */
                    array_push($_SESSION['cart'],$spadd);/*chèn một hoặc nhiều phần tử vào cuối mảng(đẩy mảng con vào cha)*/
                }
              }
           
           


            include "View/cart/viewcart.php";
            break;
            case 'deletecart':
                if(isset($_GET['idcart'] ) ){
                  
                    
                   array_splice($_SESSION['cart'],$_GET['idcart'],1);
                    
                }else{
                    $_SESSION['cart']=[];
                }
                header("location:index.php?act=viewcart");
                break;
                case 'bill':
                    if(isset($_SESSION['taikhoan'])){
                        include "View/cart/bill.php";

                    }else{
                        $_SESSION['thongbao']="Vui lòng đăng nhập để mua hàng";
                        header("location:index.php?act=viewcart");
                    }
                    break;
            case 'billconfim':

                if(isset($_POST['dathang'])&&$_POST['dathang']){
                    if(isset($_SESSION['taikhoan'])){
                        $iduser=$_SESSION['taikhoan']['id_user'];
                    }else{
                        $iduser="";
                    }
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $phone=$_POST['phone'];
                        $pttt=$_POST['pttt'];
                        $ngaydathang=date('Y/m/d');
                        $tongdonhang= tongdonhang();
                        $idbill= insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang);
                        //insert into cart :lay du lieu session va $idbill
                        //Cap nhap vo gio hang(tao gio hang)
                        foreach($_SESSION['cart'] as $cart){
                            insert_cart($_SESSION['taikhoan']['id_user'],$cart['0'],$cart['2'],$cart['1'],$cart['3'],$cart['4'],$cart['5'],$cart['6'],$cart['7'],$idbill);                     
                        }
                        //xoa session
                            $_SESSION['cart']=[];                    
                }
                $listbill=loadone_bill($idbill);
                $billchitiet=loadall_cart($idbill);
                include "View/cart/billconfirm.php";
                break;
                case 'camon':
                    if(isset($_POST['dathang'])&&$_POST['dathang']){
                        if(isset($_SESSION['taikhoan'])){
                            $iduser=$_SESSION['taikhoan']['id_user'];
                        }else{
                            $iduser="";
                        }
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $phone=$_POST['phone'];
                            $pttt=$_POST['pttt'];
                            $ngaydathang=date('Y/m/d');
                            $tongdonhang= tongdonhang();
                            $idbill= insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang);
                            //insert into cart :lay du lieu session va $idbill
                            //Cap nhap vo gio hang(tao gio hang)
                            foreach($_SESSION['cart'] as $cart){
                                insert_cart($_SESSION['taikhoan']['id_user'],$cart['0'],$cart['2'],$cart['1'],$cart['3'],$cart['4'],$cart['5'],$cart['6'],$cart['7'],$idbill);                     
                            }
                            //xoa session
                                $_SESSION['cart']=[];                    
                    }
                    $listbill=loadone_bill($idbill);
                    $billchitiet=loadall_cart($idbill);
                    
                    include "View/cart/camon.php";
                    break;
                /*Don hang boxright */
                case 'mycart':
                   $listdonhang= loadall_bill_tk($_SESSION['taikhoan']['id_user']);
                    include "View/taikhoan/donhang.php";
                    break;
                    
                case 'chitietdonhang';
                if(isset($_GET['idbill'])){
                    $id_bill=$_GET['idbill'];
                    $chitietdh= chitietdonhang($_SESSION['taikhoan']['id_user'],$id_bill);
                }
                include "View/taikhoan/ctdonhang.php";
                break;
            /*THONG KE */
           
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
