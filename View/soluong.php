<?php
include "../model/pdo.php";
include "../model/sanphambt.php";
$idcolor=$_POST['idcolor'];
$idsp=$_POST['idsp'];
$sl=sl_bt($idcolor,$idsp);
foreach($sl as $slg){
 echo "Sản phẩm còn:".$slg['soluong'];
}
?>



