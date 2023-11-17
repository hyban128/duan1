<?php
session_start();

include "View/header.php";
include "model/pdo.php";
include "model/taikhoan.php";

if(isset($_GET['act'])&&$_GET['act']!=""){
$act=$_GET['act'];
switch ($act){
       case 'trangchu':
        include "View/home.php";
        break;
        case 'dmsp':
            include "View/danhmuc_sanpham.php";
            break;
        case 'gioithieu':
            include "View/gioithieu.php";
            break;
        case 'lienhe':
                include "View/lienhe.php";
                break;
        case 'giohang':
            include "View/cart/viewcart.php";
            break;
        case 'chitietsp':
              include "View/chitietsanpham.php";
            break;
     
        case 'bill':
            include "View/cart/bill.php";
            break;
        
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&$_POST['dangnhap']){
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $err=[];  
                $checkuser= check_user($email,$pass);
                if(is_array($checkuser)){
                    $_SESSION['taikhoan']=$checkuser;
                    // var_dump($checkuser);
                    header("location:index.php?trangchu");
                }else if(empty($email)&&empty($pass)){
                    $err['err']="Vui lòng nhập thông tin";  
                }else{
                    $thongbao="Sai thông tin đăng nhập";
                }

            }
            include "View/taikhoan/taikhoan.php";
        
             break;
             case 'logout':
                unset($_SESSION['taikhoan']);
                header("location:index.php?act=trangchu");
                include "View/header.php";
                break;
             
            default: include "View/home.php";
        break;
}
 
}else{
    include "View/home.php";
}
include "View/footer.php";
