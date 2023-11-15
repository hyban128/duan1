<?php
include "view/header.php";
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
        // case 'taikhoan':
        //     include "View/taikhoan/taikhoan.php";
        //      break;
            default: include "View/home.php";
        break;
}
 
}else{
    include "View/home.php";
}
include "View/footer.php";
