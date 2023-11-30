<?php
function loadAll_size(){
    $sql="SELECT *FROM size order by id_size asc";
    $taikhoan=pdo_query($sql);
    return $taikhoan;
}
function loadAll_color(){
    $sql="SELECT *FROM color order by id_color asc";
    $taikhoan=pdo_query($sql);
    return $taikhoan;
}
 function  insert_spbienthe($size,$color,$sanpham,$soluong){
    $sql="INSERT INTO `sp_bienthe`( `id_size`, `id_color`, `id_sp`, `soluong`) VALUES ('$size','$color','$sanpham','$soluong')";
     $kq= pdo_execute($sql);
     return $kq;
 }
 function loadAll_spbt(){
    $sql="SELECT sp_bienthe.id_bt as id_bt,sp_bienthe.soluong,sanpham.name as name,size.size as size,color.color as color FROM sp_bienthe JOIN size on sp_bienthe.id_size=size.id_size join color on sp_bienthe.id_color=color.id_color join sanpham on sp_bienthe.id_sp=sanpham.id_pro order by id_pro desc";
   $bt= pdo_query($sql);
   return $bt;
 }

function loadone_spbt($idsp,$idsize,$idcolor){
$sql="SELECT * FROM sp_bienthe WHERE id_sp='$idsp' and id_size='$idsize' AND id_color='$idcolor' ";
 $kq=pdo_query_one($sql);
 return $kq;
}
function upload_sl_spbt($idsp,$idsize,$idcolor,$soluongcu){
   $bienthe= loadone_spbt($idsp,$idsize,$idcolor);
   extract($bienthe);
   $slnew=$soluong-$soluongcu;
   $sql="UPDATE sp_bienthe set soluong ='$slnew' where id_sp='$idsp'and id_color='$idcolor' and id_size='$idsize'";
    pdo_execute($sql);
}
//  function load_bt_soluong($id,$idcolor,$si){
//       $sql="SELECT soluong FROM `sp_bienthe` WHERE id_sp=7 and id_size=3 AND id_color=3;"
//  }
 function getone_spbt_size($id){
   $sql="SELECT DISTINCT size.id_size,size.size FROM `sp_bienthe` join size on sp_bienthe.id_size=size.id_size where id_sp ='$id'";
   // $sql=" SELECT sp_bienthe.id_bt as id_bt,sp_bienthe.soluong,sanpham.*,size.size as size,color.color as color,sp_bienthe.id_size,sp_bienthe.id_color as id_color FROM sp_bienthe JOIN size on sp_bienthe.id_size=size.id_size join color on sp_bienthe.id_color=color.id_color join sanpham on sp_bienthe.id_sp=sanpham.id_pro where sanpham.id_pro='$id'";
   $bt= pdo_query($sql);
  return $bt;
}
function getone_spbt_color($id){
   $sql="SELECT DISTINCT color.id_color,color.color FROM `sp_bienthe` join color on sp_bienthe.id_color=color.id_color where id_sp ='$id'";
   // $sql=" SELECT sp_bienthe.id_bt as id_bt,sp_bienthe.soluong,sanpham.*,size.size as size,color.color as color,sp_bienthe.id_size,sp_bienthe.id_color as id_color FROM sp_bienthe JOIN size on sp_bienthe.id_size=size.id_size join color on sp_bienthe.id_color=color.id_color join sanpham on sp_bienthe.id_sp=sanpham.id_pro where sanpham.id_pro='$id'";
   $bt= pdo_query($sql);
  return $bt;
}
function sl_bt($id,$idsp){
 $sql="SELECT soluong from sp_bienthe  where id_color='$id' and id_sp='$idsp'";
 $kq=pdo_query_one($sql);
 return $kq;
}
// function getone_sp_size($idcolor,$idsp){
//    $sql="SELECT size.id_size,size.size FROM size join sp_bienthe on size.id_size=sp_bienthe.id_size where sp_bienthe.id_color='$idcolor' and sp_bienthe.id_sp='$idsp'";
//    return pdo_query($sql);
// }
 function getOne_bt($id){
    $sql="SELECT sp_bienthe.id_bt as id_bt,sp_bienthe.id_size as id_size,sp_bienthe.id_color as id_color, sp_bienthe.soluong,sanpham.name as name,size.size as size,color.color as color FROM sp_bienthe JOIN size on sp_bienthe.id_size=size.id_size join color on sp_bienthe.id_color=color.id_color join sanpham on sp_bienthe.id_sp=sanpham.id_pro WHERE id_bt='$id';";
    $spbt=pdo_query_one($sql);
    return $spbt;
 }
 function update_sanphambt($size,$color,$id_bt){
    $sql="UPDATE sp_bienthe id_size SET id_size='$size',id_color='$color' where id_bt='$id_bt'";
    pdo_execute($sql);
    header("location:".$_SERVER['HTTP_REFERER']);
 }
function tk_spbt($name){ 
$sql="SELECT * FROM sanpham WHERE name LIKE '$name%'";
$kq=pdo_query_one($sql);
return $kq;
}
?>