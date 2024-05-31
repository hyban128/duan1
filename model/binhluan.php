<?php

function load_twobl($id){
    $sql="SELECT binhluan.noidung,binhluan.ngaybl,taikhoan.user,taikhoan.avata from binhluan 
    inner join taikhoan on binhluan.id_user=taikhoan.id_user
    inner join sanpham on binhluan.id_sp =sanpham.id_pro where sanpham.id_pro='$id' and binhluan.check_bl=1 order by binhluan.id_bl desc limit 0,2";
    $result=pdo_query($sql);
    return $result;
}
function load_binhluan($id){
    $sql="SELECT binhluan.noidung,binhluan.ngaybl,taikhoan.user,taikhoan.avata from binhluan 
    inner join taikhoan on binhluan.id_user=taikhoan.id_user
    inner join sanpham on binhluan.id_sp =sanpham.id_pro where sanpham.id_pro='$id' and binhluan.check_bl=1 order by binhluan.id_bl desc";
    $result=pdo_query($sql);
    return $result;
}
function delete_binhluan($id){
    $sql="DELETE from binhluan where id_bl='$id'";
    pdo_execute($sql);
}
function loadbl_sanphan(){
    $sql="SELECT sp.id_pro as idpro, sp.name as tensp,binhluan.ngaybl as ngaybl, COUNT(sp.id_pro) as 'soluong'
        
    FROM binhluan
    JOIN sanpham sp 
    ON binhluan.id_sp = sp.id_pro
    join taikhoan on binhluan.id_user=taikhoan.id_user
    where check_bl=1
   
    GROUP BY sp.id_pro, sp.name
    
    ORDER BY sp.id_pro DESC;";
        return pdo_query($sql);

}
function chitietbl($id){
    $sql="SELECT binhluan.id_bl, binhluan.noidung,taikhoan.user from binhluan 
    inner join taikhoan on binhluan.id_user=taikhoan.id_user
    inner join sanpham on binhluan.id_sp =sanpham.id_pro WHERE sanpham.id_pro='$id'and binhluan.check_bl=1";
    return pdo_query($sql);
}
function insert_binhluan($idpro, $noidung,$iduser,$date){
     
    $sql = "
        INSERT INTO `binhluan`(`noidung`, `id_user`, `id_sp`,`ngaybl`) 
        VALUES ('$noidung','$iduser','$idpro','$date');
    ";
    header("location:".$_SERVER['HTTP_REFERER']);
    pdo_execute($sql);
}
function loadbl_daduyet(){
    $sql="SELECT binhluan.id_bl,binhluan.ngaybl,binhluan.noidung,taikhoan.user,sanpham.name,binhluan.check_bl from binhluan 
    inner join taikhoan on binhluan.id_user=taikhoan.id_user
    inner join sanpham on binhluan.id_sp =sanpham.id_pro WHERE binhluan.check_bl=1 order by sanpham.name desc";
    return pdo_query($sql);
}
function loadbl_chuaduyet(){
    $sql="SELECT binhluan.id_bl,binhluan.ngaybl,binhluan.noidung,taikhoan.user,sanpham.name,binhluan.check_bl from binhluan 
    inner join taikhoan on binhluan.id_user=taikhoan.id_user
    inner join sanpham on binhluan.id_sp =sanpham.id_pro WHERE binhluan.check_bl=0 order by binhluan.ngaybl desc";
    return pdo_query($sql);
}
function duyetbl($id){
    $sql="UPDATE `binhluan` SET check_bl='1' WHERE id_bl='$id'";
    pdo_execute($sql);
}

?>