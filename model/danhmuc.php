<?php
function insert_danhmuc($tenloai){
    $sql="INSERT INTO danhmuc(name) values ('$tenloai')";
    pdo_execute($sql);
}
function loadAll_danhmuc(){
    $sql="SELECT *from danhmuc order by id_dm asc";
     $danhmuc=pdo_query($sql);
     return $danhmuc;
}
function loadOne($id){
    $sql="SELECT * from danhmuc where id_dm='$id'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function delete_danhmuc($id){
    
    $sql="DELETE from danhmuc where id_dm='$id'";
     pdo_execute($sql);
 }
 function update_danhmuc($id,$tenloai){
   $sql="UPDATE danhmuc set name='$tenloai'where id_dm='$id'";
   pdo_execute($sql);
}
?>