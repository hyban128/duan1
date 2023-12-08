<?php

session_start();

if(!$_SESSION['taikhoan']||$_SESSION['taikhoan']['role']==0){ /*Cam vao trang neu ma no ko dang nhap + cai role=0 */
    header("location:../index.php");
}
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/hanghoa.php");
include("../model/taikhoan.php");
include("../model/binhluan.php");
include("../model/sanphambt.php");
include("../model/thongke.php");
include("../model/giohang.php");
include("../model/blog.php");
include("header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['sb']) && $_POST['sb']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $err = "Thêm thành công";
            }
            include("danhmuc/add.php");
            break;
        case 'listdm':
            $danhmuc = loadAll_danhmuc();
            include("danhmuc/list.php");
            break;
        case 'suadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $dm = loadOne($id);
            }
            include("danhmuc/update.php");
            break;
        case 'updatedm':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];
                update_danhmuc($id, $tenloai);

                header("location:index.php?act=listdm");
            }
            break;
        case 'xoadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_danhmuc($id);
                header("location:index.php?act=listdm");
            }


            break;

            /*hàng hóa */
        case 'addhh':
            if (isset($_POST['sb']) && $_POST['sb']) {
                $iddm = $_POST['iddm'];
                $name = $_POST['tensp'];
                $gia = $_POST['giasp'];
                $giamgia = $_POST['giamgia'];
                $motasp = $_POST['mota'];

                $hinh = $_FILES['image'];
                $target_div = "../upload/";
                $image = $hinh['name'];
                $target_file = $target_div . $image;
                move_uploaded_file($hinh['tmp_name'], $target_file);
                // $image = null;
                //             if($_FILES['image']['name'] != ""){
                //                 $image = time() . "_" . $_FILES['image']['name'];
                //                 move_uploaded_file($_FILES['image']['tmp_name'], "../upload/$image");
                //  }
                insert_hanghoa($name, $gia, $giamgia, $image, $motasp, $iddm);
            }
            $danhmuc = loadAll_danhmuc();
            include("hanghoa/add.php");

            break;
        case 'listhh':
            if (isset($_POST['btn-sb']) && $_POST['btn-sb']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $danhmuc = loadAll_danhmuc();
            $sanpham = loadAll_sanpham($kyw, $iddm);
            include("hanghoa/list.php");
            break;
        case 'suahh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sanpham = loadOne_sanpham($id);
            }
            $danhmuc = loadAll_danhmuc();



            include("hanghoa/update.php");
            break;
        case 'updatehh':
            if (isset($_POST['capnhat'])) {

                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['mota'];
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $hinh = $_FILES['image'];
                $target_div = "../upload/";
                $image = $hinh['name'];
                $target_file = $target_div . $image;
                move_uploaded_file($hinh['tmp_name'], $target_file);


                update_hanghoa($id, $iddm, $tensp, $giasp, $motasp, $image);

                header("location:index.php?act=listhh"); // $thongbao="Cap nhap thanh cong";

            }


            $sanpham = loadAll_sanpham();
            $danhmuc = loadAll_danhmuc();
            include("hanghoa/update.php");
            break;
        case 'xoahh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_hanghoa($id);
                header("location:index.php?act=listhh"); // $thongbao="Cap nhap thanh cong";

            }
            $sanpham = loadAll_sanpham();

            include("hanghoa/list.php");

            break;
            /*TÀI KHOẢN */
        case 'addtk':
            if (isset($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                header("location:index.php?act=listtk");
            }
            include("taikhoan/add.php");
            break;

        case 'listtk':
            $taikhoan = loadAll_taikhoan();
            include("taikhoan/list.php");
            break;
        case 'suatk':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tk = loadOne_tk($id);
            }
            include("taikhoan/update.php");
            break;
        case 'updatetk':
            if (isset($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];

                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                $hinh = $_FILES['avata'];
                $target_div = "../upload/";
                $image = $hinh['name'];
                $target_file = $target_div . $image;
                move_uploaded_file($hinh['tmp_name'], $target_file);

                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $image, $address, $phone, $role);

                header("location:index.php?act=listtk");
            }
            $taikhoan = loadAll_taikhoan();
            include("taikhoan/update.php");
            break;
        case 'xoatk':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_tk($id);
                header("location:index.php?act=listtk");
            }
            include("taikhoan/list.php");
            break;
        case 'khoatk':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $khoa=khoatk($id);
            }
            $taikhoan = loadAll_taikhoan();

            include "taikhoan/list.php";
            break;
        case 'motk':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $mo=motk($id);
            }
            $taikhoan = loadAll_taikhoan();

            include "taikhoan/list.php";
            break;
            /*Binh luan */
        case 'dsbl':
            $binhluan = loadbl_sanphan();
            include "binhluan/list.php";
            break;
        case 'chitietbl':
            if (isset($_GET['idpro'])) {
                $idpro = $_GET['idpro'];
                $chitietbl = chitietbl($idpro);
                include "binhluan/chitietbl.php";
            }

            break;
        case 'dsbl_daduyet':
           $bl_dd= loadbl_daduyet();
            include "binhluan/all.php";
            break;
        case 'dsbl_chuaduyet':
           $bl_dd= loadbl_chuaduyet();
            include "binhluan/all.php";
            break;
        case 'duyetbl':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
               $bl_dd= duyetbl($id);
               header("location:index.php?act=dsbl_daduyet");
            }
            include "binhluan/all.php";
            break;
        case 'xoabl':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                delete_binhluan($id);
                header("location:index.php?act=dsbl");
            }
            $binhluan = loadbl_sanphan();

            include "binhluan/list.php";
            break;
            /*sp bien the */
        case 'addspbt':
            if(isset($_POST['btn-sb'])){
                $spp=tk_spbt($_POST['kyw']);
            }
            if (isset($_POST['sb']) && $_POST['sb']) {
                $color = $_POST['color'];
                $size = $_POST['size'];
                $sanpham = $_POST['sp'];
                $soluong = $_POST['soluong'];
                // $idsp=$_POST['idsp'];
                insert_spbienthe($size, $color, $sanpham, $soluong);
            }
            $size = loadAll_size();
            $color = loadAll_color();
            $sanpham = loadAll_sanpham();
            $danhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listspbt':
            $size = loadAll_size();
            $color = loadAll_color();
            $sanpham = loadAll_sanpham();
            $sanphambienthe = loadAll_spbt();
            include "sanpham/list.php";
            break;
        case 'suaspbt':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $spbt = getOne_bt($id);
            }
            $size = loadAll_size();
            $color = loadAll_color();
            $sanphambienthe = loadAll_spbt();

            include "sanpham/update.php";
            break;
        case 'updatespbt':
            if (isset($_POST['capnhat'])) {
                $size = $_POST['size'];
                $color = $_POST['color'];
                $id_bt = $_POST['id_bt'];
                //    $soluong=$_POST['soluong'];
                update_sanphambt($size, $color, $id_bt);
                header("location:index.php?act=listspbt");
            }
            $taikhoan = loadAll_taikhoan();

            include "sanpham/update.php";
            break;
            /*Thong ke */
        case 'dstk':
            
            $dsthongke = thongke_sp_danhmuc();
            $tien=load_tien_ngay();
            include "thongke/thongke.php";
            break;
        case 'bieudo':
            // $tien=load_tien_ngay();
            $dsthongke = thongke_sp_danhmuc();         
            include "thongke/bieudo.php";
            break;
            /*Blog */
        case 'bieudo2':
             $tien=load_tien_ngay();
        include "thongke/chart1.php";
         break;
        case 'addblog':
            if (isset($_POST['them']) && $_POST['them']) {
                $id = $_SESSION['taikhoan']['id_user'];
                $title = $_POST['title'];
                $noidung = $_POST['content'];
                $ngaydang = date('Y/m/d');
                $hinh = $_FILES['image'];
                $target_div = "../upload/";
                $image = $hinh['name'];
                $target_file = $target_div . $image;
                move_uploaded_file($hinh['tmp_name'], $target_file);
                insert_blog($id, $image, $title, $noidung, $ngaydang);
            }
            //   $taikhoan= loadAll_taikhoan();
            include "blog/add.php";
            break;

        case 'dsblog':
            $blog = loadall_blog();
            include "blog/list.php";
            break;
        case 'updateblog':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $oneblog = loadone_blog($id);
            }
            if (isset($_POST['capnhat'])) {

                $tieude = $_POST['title'];
                $noidung = $_POST['noidung'];
                $ngaysua = $_POST['ngaysua'];
                $id = $_POST['id'];
                $hinh = $_FILES['image'];
                $target_div = "../upload/";
                $image = $hinh['name'];
                $target_file = $target_div . $image;
                move_uploaded_file($hinh['tmp_name'], $target_file);


                update_blog($id, $image, $tieude, $noidung, $ngaysua);

                header("location:index.php?act=dsblog"); // $thongbao="Cap nhap thanh cong";

            }


            $sanpham = loadAll_sanpham();
            $danhmuc = loadAll_danhmuc();
            include "blog/update.php";
            break;
        case 'xoablog':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_blog($id);
                header("location:index.php?act=dsblog");
            }
            include "blog/list.php";
            break;

            /*Giỏ hàng */
        case 'dsgh':
            $giohang = loadall_bill(0);
            include "donhang/list.php";
            break;
        case 'suadh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $onebill = loadone_bill($id);
            }
            include "donhang/update.php";
            break;
        case 'updatedh':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
              
                $trangthai = $_POST['trangthai'];
                $id = $_POST['id'];
                update_bill($id, $trangthai);
                header("location:index.php?act=dsgh");
            }
            $listbill = loadall_bill(0);
            include "donhang/update.php";
            break;
        case 'chitietbill':
            if (isset($_GET['id'])) {
                $id_bill = $_GET['id'];
                $chitietdh = chitiet_bill($id_bill);
            }
            include "donhang/chitietdh.php";
            break;
        case 'cxn':
            $giohang = load_choxn();
            include "donhang/list.php";
            break;
        case 'ch':
            $giohang = load_chohuy();
            include "donhang/list.php";
            break;
        case 'clh':
            $giohang = load_layhang();
            include "donhang/list.php";
            break;
        case 'danggiao':
            $giohang = load_danggiao();
            include "donhang/list.php";
            break;
        case 'dagiao':
            $giohang = load_dagiao();
            include "donhang/list.php";
            break;
        case 'dh':
            $giohang = load_dahuy();
            include "donhang/list.php";
            break;

        default:
            include("trangchu.php");

            break;
    }
} else {
    header("location:index.php?act=adddm");
}
include("footer.php");
