<?php
// function loadAll_binhluan(){
//     $sql="SELECT binhluan.*,sanpham.name,taikhoan.user from binhluan 
//     inner join taikhoan on binhluan.id_user=taikhoan.id_user
//     inner join sanpham on binhluan.id_sp =sanpham.id_pro";
//     $result=pdo_query($sql);
//     return $result;
// }

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
   
    GROUP BY sp.id_pro, sp.name
    
    ORDER BY sp.id_pro DESC;";
        return pdo_query($sql);

}
function chitietbl($id){
    $sql="SELECT binhluan.id_bl, binhluan.noidung,taikhoan.user from binhluan 
    inner join taikhoan on binhluan.id_user=taikhoan.id_user
    inner join sanpham on binhluan.id_sp =sanpham.id_pro WHERE sanpham.id_pro='$id';";
        return pdo_query($sql);
}
?>