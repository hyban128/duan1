<?php
session_start();

include "model/pdo.php";
include "model/danhmuc.php";
include "model/hanghoa.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/sanphambt.php";
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
            //    $sp_cungloai= load_sp_cungloai($id,$iddm);
               $binhluan=load_binhluan($id);
               luotxem($id);
               
               
               
                
            }else{
                include "View/home.php";
            }          
           
            include "View/chitietsanpham.php";
            break;

        case 'bill':
            include "View/cart/bill.php";
            break;
       
        case 'camon':
            include "View/cart/camon.php";
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
       /*gio hang */
       case 'viewcart':
                
        include "View/cart/viewcart.php";
        
        break;
        case 'addcart':
            if(isset($_POST['addcart']) &&$_POST['addcart']){
                $id=$_POST['id'];
              
                  $name=$_POST['name'];
                  $img=$_POST['img'];
                  $price=$_POST['price'];
                  $soluong=$_POST['soluong'];
                  $color=$_POST['color'];
                  $size=$_POST['size'];
                  $tien=$price*$soluong;
                   $spadd=[$id,$name,$img,$price,$soluong,$color,$size,$tien];/*vi tri mang 0123456 */
                 
                   array_push($_SESSION['cart'],$spadd);/*chèn một hoặc nhiều phần tử vào cuối mảng(đẩy mảng con vào cha)*/
               
                
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
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
