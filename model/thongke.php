<?php
function load_thongke_sanpham_danhmuc() {
    $sql="SELECT dm.id_dm, dm.name, COUNT(dm.id_dm) as 'soluong', MIN((price-((price*discount)/100))) as 'gia_min',
    Max(price) as 'gia_max'
    FROM danhmuc dm 
    JOIN sanpham sp 
    ON dm.id_dm = sp.iddm
    GROUP BY dm.id_dm, dm.name
    ORDER BY dm.id_dm asc";
    return pdo_query($sql);
}
function thongke_hangbanchaytheokhohangtrongsanpham(){
    // SELECT danhmuc.name as loaihang , sanpham.name as sanphamban, sanpham.soluong AS total_quantity,SUM(cart.soluong) AS daban FROM sanpham join danhmuc on sanpham.iddm =danhmuc.id JOIN cart on sanpham.id=cart.idpro GROUP BY sanpham.name;
}
// số tiền bán theo ngày
function load_tien_ngay(){

    $sql="SELECT ngaydat as ngay ,SUM(tongtien) as tong from bill group by ngaydat;";
    return pdo_execute($sql);
}
// SELECT ngaydathang AS ngay, SUM(total) AS total_quantity FROM bill GROUP BY ngaydathang;
?>