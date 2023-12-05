<?php
function thongke_sp_danhmuc() {
    $sql="SELECT dm.id_dm, dm.name, COUNT(dm.id_dm) as 'soluong', MIN((price-((price*discount)/100))) as 'gia_min',
    Max(price) as 'gia_max'
    FROM danhmuc dm 
    JOIN sanpham sp 
    ON dm.id_dm = sp.iddm
    GROUP BY dm.id_dm, dm.name
    ORDER BY dm.id_dm asc";
    $kq= pdo_query($sql);
    return $kq;
}
function load_tien_ngay(){
   $sql="SELECT MONTH(ngaydat) AS ngay, SUM(tongtien) AS tong 
   FROM bill 
   WHERE trangthai = 4 
   GROUP BY ngay 
   ORDER BY ngay asc
   LIMIT 5";
 $kq= pdo_query($sql);
 return $kq;
}
?>