<?php
include ("../model/pdo.php");
include ("../model/danhmuc.php");
include ("../model/hanghoa.php");
include ("../model/taikhoan.php");
include ("../model/binhluan.php");
include ("../model/sanphambt.php");
include("header.php");

if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act) {
        case 'adddm':
            if(isset($_POST['sb'])&&$_POST['sb']){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $err="Thêm thành công";
            }
            include("danhmuc/add.php");
            break;
        case 'listdm':
            $danhmuc=loadAll_danhmuc();
            include("danhmuc/list.php");
            break;
        case 'suadm':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $dm=loadOne($id);
            }
            include ("danhmuc/update.php");
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])){
                $id=$_POST['id'];
                $tenloai=$_POST['tenloai'];
                update_danhmuc($id,$tenloai);

                header("location:index.php?act=listdm");

            }
            break;
        case 'xoadm':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            delete_danhmuc($id);
            header("location:index.php?act=listdm");

            }
            

            break;
            
            /*hàng hóa */
            case 'addhh':
                if(isset($_POST['sb'])&& $_POST['sb']){
                    $iddm=$_POST['iddm'];
                    $name=$_POST['tensp'];
                    $gia=$_POST['giasp'];
                    $giamgia=$_POST['giamgia'];
                    $motasp=$_POST['mota'];
                    
                    $hinh=$_FILES['image'];
                    $target_div="../upload/";
                    $image=$hinh['name'];
                    $target_file=$target_div.$image;
                    move_uploaded_file($hinh['tmp_name'], $target_file);
                    // $image = null;
                    //             if($_FILES['image']['name'] != ""){
                    //                 $image = time() . "_" . $_FILES['image']['name'];
                    //                 move_uploaded_file($_FILES['image']['tmp_name'], "../upload/$image");
                              //  }
                    insert_hanghoa($name,$gia,$giamgia,$image,$motasp,$iddm);
                }
                $danhmuc= loadAll_danhmuc();
                include ("hanghoa/add.php");

                break;
            case 'listhh':
                if(isset($_POST['btn-sb']) && $_POST['btn-sb']){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];

                }else{
                    $kyw="";
                    $iddm=0;
                }
                $danhmuc=loadAll_danhmuc();
                 $sanpham=loadAll_sanpham($kyw,$iddm);
                 include ("hanghoa/list.php");
                 break;
            case 'suahh':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                   
                            $sanpham=loadOne_sanpham($id);
                           
                }
                $danhmuc=loadAll_danhmuc();
               
               

                include ("hanghoa/update.php");
                break;
            case 'updatehh':
                if(isset($_POST['capnhat'])){
                                
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $motasp=$_POST['mota'];
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $hinh=$_FILES['image'];
                    $target_div="../upload/";
                    $image=$hinh['name'];
                    $target_file=$target_div.$image;
                    move_uploaded_file($hinh['tmp_name'], $target_file);
                             

                 update_hanghoa($id,$iddm,$tensp,$giasp,$motasp,$image);
                  
                            header("location:index.php?act=listhh");// $thongbao="Cap nhap thanh cong";
                            
                            }
                       

                            $sanpham=loadAll_sanpham();
                            $danhmuc=loadAll_danhmuc();
                include ("hanghoa/update.php");
                break;
            case 'xoahh':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delete_hanghoa($id);
                    header("location:index.php?act=listhh");// $thongbao="Cap nhap thanh cong";

                }
                $sanpham=loadAll_sanpham();

                include ("hanghoa/list.php");

                break;   
            /*TÀI KHOẢN */
            case 'addtk':
                if(isset($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    header("location:index.php?act=listtk");

                }
                include ("taikhoan/add.php");
                break;

            case 'listtk':
               $taikhoan= loadAll_taikhoan();
                include ("taikhoan/list.php");
                break;
            case 'suatk':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $tk=loadOne_tk($id);
                }
                include ("taikhoan/update.php");
                break;
            case 'updatetk':
                if(isset($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                   
                    $address=$_POST['address'];
                    $phone=$_POST['phone'];
                    $role=$_POST['role'];
                    $hinh=$_FILES['avata'];
                    $target_div="../upload/";
                    $image=$hinh['name'];
                    $target_file=$target_div.$image;
                    move_uploaded_file($hinh['tmp_name'], $target_file);
                             
                    $id=$_POST['id'];
                   update_taikhoan($id,$user,$pass,$email,$image,$address,$phone,$role);
                
                   header("location:index.php?act=listtk");
                }
                $taikhoan=loadAll_taikhoan();
                include ("taikhoan/update.php");
                break;
            case 'xoatk':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delete_tk($id);
                    header("location:index.php?act=listtk");

                }
                include ("taikhoan/list.php");
                break;
                /*Binh luan */
                case 'dsbl':
                    $binhluan=loadbl_sanphan();
                    include "binhluan/list.php";
                    break;
                case 'chitietbl':
                    if(isset($_GET['idpro'])){
                        $idpro=$_GET['idpro'];
                        $chitietbl= chitietbl($idpro);
                         include "binhluan/chitietbl.php";

                      }        

                    break;
                case 'xoabl':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                       
                        delete_binhluan($id);
                        header("location:index.php?act=dsbl");
                        
                    }
                    $binhluan=loadbl_sanphan();

                    include "binhluan/list.php";
                    break;
                    /*sp bien the */
                case 'addspbt':
                    if(isset($_POST['sb'])&& $_POST['sb']){
                        $color=$_POST['color'];
                        $size=$_POST['size'];
                        $idsp=$_POST['idsp'];
                        insert_spbienthe($color,$size,$idsp);
                    }
                    $size=loadAll_size();
                    $color=loadAll_color();
                    $sanpham=loadAll_sanpham();
                    $danhmuc= loadAll_danhmuc();
                    include "sanpham/add.php";
                    break;
                case 'listspbt':
                    $size=loadAll_size();
                    $color=loadAll_color();
                    $sanpham=loadAll_sanpham();
                    $sanphambienthe=loadAll_spbt();
                    include "sanpham/list.php";
                    break;
                case 'suaspbt':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                       $spbt= getOne_bt($id);
                      

                    
                }     
                $size=loadAll_size();
                $color=loadAll_color();    
                $sanphambienthe=loadAll_spbt();

                    include "sanpham/update.php";
                    break;
                case 'updatespbt':
                    if(isset($_POST['capnhat'])){
                       $size=$_POST['size'];
                       $color=$_POST['color'];
                       $id_bt=$_POST['id_bt'];
                    //    $soluong=$_POST['soluong'];
                    update_sanphambt($size,$color,$id_bt);
                       header("location:index.php?act=listspbt");
                    }
                    $taikhoan=loadAll_taikhoan();
                    
                    include "sanpham/update.php";
                    break;
                /*Gio hàng */
                
        default:
        include("trangchu.php");
          
            break;
    }
}else{
       header("location:index.php?act=adddm");
}
include("footer.php");
?>