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
 function  insert_spbienthe($color,$size,$idsp){
    $sql="INSERT INTO sp_bienthe(id_color,id_size,id_sp) VALUES ('$color','$size','$idsp')";
     pdo_execute($sql);
 }
 function loadAll_spbt(){
    $sql="SELECT sp_bienthe.id_bt as id_bt,sp_bienthe.soluong,sanpham.name as name,size.size as size,color.color as color FROM sp_bienthe JOIN size on sp_bienthe.id_size=size.id_size join color on sp_bienthe.id_color=color.id_color join sanpham on sp_bienthe.id_sp=sanpham.id_pro";
   $bt= pdo_query($sql);
   return $bt;
 }
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

?>