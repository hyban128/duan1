<?php

function tongdonhang(){
  $tong = 0;
  foreach ($_SESSION['cart'] as $cart) {
    $tongtien = $cart[3] * $cart[4];
    $tong += $tongtien;
  }
  return $tong;
}
function insert_bill($iduser, $name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang)
{
  $sql = "INSERT INTO bill(id_user, name_user, address,email,phone, pttt, ngaydat, tongtien) VALUES ('$iduser','$name','$address','$email','$phone','$pttt','$ngaydathang','$tongdonhang')";
  $kq = pdo_execute_return_lastInsertID($sql);
  return $kq;
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $size, $color, $thanhtien, $idbill){
  $sql = "INSERT INTO chitietdonhang(id_user, id_sp, img_sp, tensp, price, soluong,color,size, thanhtien, id_bill) VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$color','$size','$thanhtien','$idbill')";
  pdo_execute($sql);
 
}

function loadone_bill($idbill)
{
  $sql = "SELECT *FROM bill where id_bill='$idbill'";
  $listbill = pdo_query_one($sql);
  return $listbill;
}

function loadall_bill($iduser)
{
  $sql = "SELECT  *FROM bill where 1";/*iduser =0 load tat ca */
  if ($iduser > 0) $sql .= " AND id_user='$iduser'";/*neu iduser>0 thuc hien noi chuoi */
  $sql .= " order by trangthai asc";
  $listbill = pdo_query($sql);
  return $listbill;
}
function loadall_bill_tk($id)
{
  $sql = "SELECT *from bill where id_user='$id'";
  $listbill = pdo_query($sql);
  return $listbill;
}
function update_bill($id, $khachhang, $diachi, $dienthoai, $trangthai)
{
  $sql = " UPDATE bill SET name_user='$khachhang',`address`='$diachi',phone='$dienthoai',trangthai='$trangthai' WHERE id_bill='$id'";
  pdo_execute($sql);
}

function loadall_cart($idbill)
{
  $sql = "SELECT *FROM chitietdonhang where id_bill='$idbill'";
  $bill = pdo_query($sql);
  return $bill;
}

function loadall_cart_count($idbill)
{/*Dem so luong mat hang */
  $sql = "SELECT *FROM chitietdonhang where id_bill='$idbill'";
  $bill = pdo_query($sql);
  return count($bill);
}
function delete_bill($id)
{
  $sql = "DELETE from bill where id_bill='$id'";
  $kq = pdo_execute($sql);
  return $kq;
}


function get_ttdh($trangthai){ /*trang thai don hang */
  switch ($trangthai) {
    case '0':
      $tt = "Chờ xác nhận";
      break;
    case '1':
      $tt = "Chờ lấy hàng";
      break;
    case '2':
      $tt = "Đang giao";
      break;
    case '3':
      $tt = "Đã giao ";
      break;
    case '4':
      $tt="Chờ hủy";
      break;
    case '5':
      $tt="Đã hủy";
      break;
    default:
      $tt = "Chờ xác nhận";
      break;
  }
  return $tt;
}
function huydonhang($idbill){
      $sql="UPDATE `bill` SET `trangthai`='4' WHERE id_bill='$idbill'";
      pdo_execute($sql);
}
function load_choxn(){
  $sql="SELECT *from bill where trangthai='0'";
  $kq=pdo_query($sql);
  return $kq;
}
function load_layhang(){
  $sql="SELECT *from bill where trangthai='1'";
  $kq=pdo_query($sql);
  return $kq;
}
function load_chohuy(){
  $sql = "SELECT  *FROM bill where trangthai=4";/*iduser =0 load tat ca */
  
  $listbill = pdo_query($sql);
  return $listbill;
}
function load_danggiao(){
  $sql = "SELECT  *FROM bill where trangthai=2";/*iduser =0 load tat ca */
  
  $listbill = pdo_query($sql);
  return $listbill;
}
function load_dagiao(){
  $sql = "SELECT  *FROM bill where trangthai=3";/*iduser =0 load tat ca */
  
  $listbill = pdo_query($sql);
  return $listbill;
}
function load_dahuy(){
  $sql = "SELECT  *FROM bill where trangthai=5";/*iduser =0 load tat ca */
  
  $listbill = pdo_query($sql);
  return $listbill;
}
function billchitiet($listbill)
{
  if (isset($listbill)) {
    var_dump($listbill);
  } else {
    echo "ko";
  }
  $tong = 0;
  $i = 0;

  echo '   <tr>
      <th>Hình</th>
      <th>Sản phẩm</th>
      <th>Đơn giá</th>
      <th>Số lượng</th>
      <th>Size</th>
      <th>Color</th>

      <th>Thành tiền</th>
      
      </tr>';

  foreach ($listbill as $cart) {

    $hinh = "upload/" . $cart['img_sp'];
    $thanhtien = $cart['price'] * $cart['soluong'];
    $tong += $thanhtien;

    echo '
                   
                       <tr>
                       <td> <img src="' . $hinh . '" height="80px"></td>
                       <td> ' . $cart['tensp'] . '</td>
                       <td> ' . $cart['price'] . '</td>
                       <td> ' . $cart['soluong'] . '</td>
                       <td> ' . ($cart['size'] == 3 ? 'M' : 'S') . '</td>
                       <td> ' . ($cart['color'] == 3 ? 'Trắng' : 'Đen') . '</td>
                       <td> ' . $thanhtien . '</td>
                      
                      
                        
                       </tr> ';

    $i += 1;
  }

  echo  '
                  <td colspan="6">Tổng đơn hàng </td>
                  <td> ' . $tong . '</td>
                 
                  </tr>';
}
function chitietdonhang($id_user,$id_bill){/*lich su mua hang */
  $sql = "SELECT ct.img_sp,ct.tensp,ct.price,ct.soluong,ct.color,ct.size,ct.thanhtien FROM bill join chitietdonhang ct on bill.id_bill=ct.id_bill WHERE bill.id_user='$id_user' AND bill.id_bill='$id_bill'";
  $chitietdonhang = pdo_query($sql);
  return $chitietdonhang;
}
function chitiet_bill($id_bill){/*Admin */
  $sql = "SELECT ct.img_sp,ct.tensp,ct.price,ct.soluong,ct.color,ct.size,ct.thanhtien FROM bill join chitietdonhang ct on bill.id_bill=ct.id_bill WHERE  bill.id_bill='$id_bill'";
  $chitietdonhang = pdo_query($sql);
  return $chitietdonhang;

}
?>