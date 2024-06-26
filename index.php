<?php
session_start();

include "model/pdo.php";
include "model/danhmuc.php";
include "model/hanghoa.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "model/binhluan.php";
include "model/sanphambt.php";
include "model/blog.php";

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
$blog = load_blog();
$size = loadAll_size();
$color = loadAll_color();
$spnew = loadAll_view();/*goi ham ben model/sanpham */
$danhmuc = loadAll_danhmuc();
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
            $err = [];

            if (isset($_POST['guibinhluan'])) {
                $iduser = $_SESSION['taikhoan']['id_user'];
                $noidung = $_POST['noidung'];
                $date = date('Y-m-d');
                $camon = "Cảm ơn ý kiến phản hồi của bạn";
                if (empty($noidung)) {
                    $err['noidung'] = "Bạn chưa nhập gì";
                } else {
                    setcookie("oke", $camon, time() + 5);
                    // $_SESSION['camon']=   setcookie("oke",$camon,time()+5);
                    insert_binhluan($_POST['idpro'], $_POST['noidung'], $iduser, $date);
                }
            }

            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $onesp = loadOne_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sp_cungloai($id, $iddm);
                $spbt_size = getone_spbt_size($id);
                $spbt_color = getone_spbt_color($id);

                if (isset($_GET['full'])) {
                    $binhluan = load_binhluan($id);
                } else {
                    $binhluan = load_twobl($id);
                }
                luotxem($id);
            } else {
                include "View/home.php";
            }
            $bl_dd = loadbl_daduyet();

            include "View/chitietsanpham.php";
            break;




        case 'dangky':

            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $emailnew = $_POST['email'];
                $user = $_POST['user'];
                $passnew = $_POST['pass'];
                $nhaplai = $_POST['passlai'];
                $uppercase = preg_match('@[A-Z]@', $passnew);
                $number = preg_match('@[0-9]@', $passnew);
                $err = [];
                $checkuser = check_dangky($emailnew);
                if (!$uppercase || !$number) {
                    $err['pass'] = "Mật khẩu ít nhất một chữ hoa và một số";
                }
                if ($emailnew == $checkuser['email']) {
                    $err['email'] = "Email đã tồn tại";
                }
                if ($passnew != $nhaplai) {
                    $err['passlai'] = "Mật khẩu không trùng khớp";
                }
                if (!$err) {
                    $dangky = insert_dangky($emailnew, $user, $passnew);
                    include "View/taikhoan/dangnhap.php";
                }
            }
            include "View/taikhoan/dangky.php";
            break;
        case 'dangnhap':

            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $err = [];
                $checkuser = check_user($email, $pass);
                $taikhoan = loadAll_taikhoan();
                if (is_array($checkuser)) {
                    $_SESSION['taikhoan'] = $checkuser;
                    header("location:index.php?act=trangchu");
                } else if (empty($email) && empty($pass)) {
                    $err['err'] = "Vui lòng nhập thông tin";
                } else {
                    $thongbao = "Sai thông tin đăng nhập hoặc tài khoản đã bị khóa";
                }

            }
            include "View/taikhoan/dangnhap.php";


            break;

        case 'updatetk':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $taikhoan = loadOne_tk($id);
                extract($taikhoan);
                // include "View/taikhoan/capnhat.php";
            }
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $diachi = $_POST['address'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                $tk=loadOne_tk($id);
                $avata=$tk['avata'];



                $hinh = $_FILES['avata'];

                $image = $hinh['name'];
                $target_div = "upload/";
                $target_file = $target_div . $image;

                if(move_uploaded_file($hinh['tmp_name'], $target_file)){
                    $image=$target_file;
                }else{
                    $image=$avata;
                }

                   
              

                $id = $_POST['id'];
                update_tkView($id, $user, $email, $image, $diachi, $phone);
                header("location:index.php?act=thongtin");

            }


            include "View/taikhoan/capnhat.php";
            break;

        case 'logout':
            unset($_SESSION['taikhoan']);
            header("location:index.php?act=trangchu");
            include "View/header.php";
            break;
        case 'doimk':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $pass = $_POST['pass'];
                $passnew = $_POST['pass1'];
                $passlai = $_POST['pass2'];
                $id = $_POST['id'];
                // var_dump($checkuser);
                if (empty($pass)) {
                    $thongbao = "Vui lòng nhập thông tin";
                } else if ($pass != $_SESSION['taikhoan']['pass']) {
                    $thongbao = "Mật khẩu không đúng";
                } else if ($passnew == $passlai) {
                    update_pass($passnew, $id);
                    $thongbao = "Thay đổi thành công";
                    unset($_SESSION['taikhoan']);
                    header("location:index.php?act=dangnhap");
                } else {
                    $thongbao = "Mật khẩu không trùng";
                }
            }
            // update_pass();
            include "View/taikhoan/doimatkhau.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && $_POST['guiemail']) {
                $email = $_POST['email'];
                $sendmailMess = check_email($email);
            }
            include "View/taikhoan/quenmk.php";
            break;
        case 'thongtin':
            if (isset($_SESSION['taikhoan'])) {
                extract($_SESSION['taikhoan']);
                $user = loadOne_tk($id_user);
                extract($user);
            }
            include "View/taikhoan/thongtin.php";
            break;
        case 'donhang':
            include "View/taikhoan/donhang.php";
            break;
            /*sanpham */
        case 'sanpham':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {/*tim kiem san pham*/
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm'])) {/*lay san pham theo danh muc*/
                $iddm = $_GET['iddm'];
            } else {
                $iddm = "";
            }

            $ds_sanpham = loadAll_sanpham($kyw, $iddm);
            $ten = load_tendm($iddm);
            include "View/danhmuc_sanpham.php";
            break;
        case 'tren300':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {/*tim kiem san pham*/
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm'])) {/*lay san pham theo danh muc*/
                $iddm = $_GET['iddm'];
            } else {
                $iddm = "";
            }
            $ten = load_tendm($iddm);

            $ds_sanpham = giacao();

            include "View/danhmuc_sanpham.php";
            break;
        case 'duoi100':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {/*tim kiem san pham*/
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm'])) {/*lay san pham theo danh muc*/
                $iddm = $_GET['iddm'];
            } else {
                $iddm = "";
            }
            $ten = load_tendm($iddm);

            $ds_sanpham = giaduoi100();

            include "View/danhmuc_sanpham.php";
            break;
        case '100den200':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {/*tim kiem san pham*/
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm'])) {/*lay san pham theo danh muc*/
                $iddm = $_GET['iddm'];
            } else {
                $iddm = "";
            }
            $ten = load_tendm($iddm);

            $ds_sanpham = gianuagiua();

            include "View/danhmuc_sanpham.php";
            break;
            /*gio hang */
        case 'viewcart':

            include "View/cart/viewcart.php";

            break;
        case 'addcart':

            if (isset($_POST['addcart']) && $_POST['addcart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $color = $_POST['color'];
                $size = $_POST['size'];
                $sl = soluong($id, $color, $size);
                $xinloi="Xin lỗi! Vui lòng mua sản phẩm khác";
                if (isset($sl['soluong'])) {
                    if ($sl['soluong'] >= $_POST['soluong']) {
                        $i = 0;
                        $fg = 0;
                        $tien = $price * $soluong;
                        foreach ($_SESSION['cart'] as $cart) {
                            if ($cart[1] == $name && $cart[5] == $color && $cart[6] == $size) {
                                $slnew = $soluong + $cart[4];
                                $_SESSION['cart'][$i][4] = $slnew;
                                $fg = 1;
                                break;
                            }

                            $i++;
                        }
                        if ($fg == 0) {

                            $spadd = [$id, $name, $img, $price, $soluong, $color, $size, $tien];/*vi tri mang 0123456 */
                            array_push($_SESSION['cart'], $spadd);/*chèn một hoặc nhiều phần tử vào cuối mảng(đẩy mảng con vào cha)*/
                        }
                    } else {
                        header("location:index.php?act=chitietsp&idsp=$id");
                        $tb_soluong = "Số lượng trong kho còn:" . $sl['soluong'];
                        setcookie("tbsl", $tb_soluong, time() + 5);
                    }
                } else {
                    setcookie('xinloi',$xinloi,time()+5);
                    header("location:index.php?act=chitietsp&idsp=$id");
                }
            }

            if (isset($_POST['btn-sb'])) {
                $i = 0;
                $id = $_POST['idsp'];
                $color = $_POST['idcolor'];
                $size = $_POST['idsize'];
                $sl = soluong($id, $color, $size);
                if ($sl['soluong'] >= $_POST['slcn']) {
                    foreach ($_SESSION['cart'] as $cart) {
                        if (isset($_POST['idsp']) && isset($_POST['idcolor']) && isset($_POST['idsize'])) {
                            $slnew = $_POST['slcn'];
                            $_SESSION['cart'][$i][4] = $slnew;
                            break;
                        }
                        $i++;
                    }
                }
            }

            include "View/cart/viewcart.php";
            break;
        case 'deletecart':
            if (isset($_GET['idcart'])) {


                array_splice($_SESSION['cart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['cart'] = [];
            }
            header("location:index.php?act=viewcart");
            break;
        case 'bill':
          
            if (isset($_SESSION['taikhoan'])) {
                include "View/cart/bill.php";
            } else {
                $_SESSION['thongbao'] = "Vui lòng đăng nhập để mua hàng";
                header("location:index.php?act=viewcart");
            }
            break;
     
        
        case 'camon':
            if (isset($_POST['dathang']) && $_POST['dathang']) {
                if (isset($_SESSION['taikhoan'])) {
                    $iduser = $_SESSION['taikhoan']['id_user'];
                } else {
                    $iduser = "";
                }
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('Y/m/d');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang);
                // $spadd=[$id,$name,$img,$price,$soluong,$color,$size,$tien];/*vi tri mang 0123456 */

                foreach ($_SESSION['cart'] as $cart) {
                    insert_cart($_SESSION['taikhoan']['id_user'], $cart['0'], $cart['2'], $cart['1'], $cart['3'], $cart['4'], $cart['5'], $cart['6'], $cart['7'], $idbill);
                    upload_sl_spbt($cart[0], $cart[6], $cart[5], $cart[4]);
                }
                //xoa session
                $_SESSION['cart'] = [];
            }
            $listbill = loadone_bill($idbill);
            $billchitiet = loadall_cart($idbill);
            include "View/cart/camon.php";
            
            break;
        case 'momo':
            include "View/cart/momo.php";
            break;
            /*Don hang boxright */
        case 'mycart':
            $listdonhang = loadall_bill_tk($_SESSION['taikhoan']['id_user']);
            include "View/taikhoan/donhang.php";
            break;

        case 'chitietdonhang';
            if (isset($_GET['idbill'])) {
                $id_bill = $_GET['idbill'];
                $chitietdh = chitietdonhang($_SESSION['taikhoan']['id_user'], $id_bill);
            }
            include "View/taikhoan/ctdonhang.php";
            break;
        case 'huydh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $onebill = loadone_bill($id);
                extract($onebill);
                if ($trangthai == 0) {
                    huydonhang($id);
                }
                header("location:index.php?act=mycart");
            }
            include "View/taikhoan/donhang.php";
            break;
            
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
