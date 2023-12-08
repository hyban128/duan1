<?php
include("boxtrai.php");
?>
<div class="row">
  <div class="col-md-3">
    <!-- Sidebar -->
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Quản lý website
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
          <ul class="list-group">
              <!-- <li class="list-group-item active"></li> -->



              <li class="list-group-item">Danh mục
                <ul>
                  <li><a href="index.php?act=adddm">Thêm mới</a></li>
                  <li><a href="index.php?act=listdm">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Hàng hóa
                <ul>
                  <li><a href="index.php?act=addhh">Thêm mới</a></li>
                  <li><a href="index.php?act=listhh">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Sản phẩm
                <ul>
                  <li><a href="index.php?act=addspbt">Thêm mới</a></li>
                  <li><a href="index.php?act=listspbt">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Tài khoản
                <ul>
                  <li><a href="index.php?act=addtk">Thêm mới</a></li>
                  <li><a href="index.php?act=listtk">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Bình luận
                <ul>
                  <li><a href="index.php?act=dsbl">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Blog
                <ul>
                  <li><a href="index.php?act=addblog">Thêm mới</a></li>
                  <li><a href="index.php?act=dsblog">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Đơn hàng
              <ul>
                <li><a href="index.php?act=dsgh">Danh sách</a></li>
              </ul>
              </li>
              
              <li class="list-group-item">Thống kê

                <ul>
                  <li><a href="index.php?act=dstk">Danh sách</a></li>
                </ul>
              </li>

          
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="col-md-9">
    <!-- Nội dung trang -->
    <div class="card">
      <div class="card-header">
        <h4>Quản lý giỏ hàng</h4>
      </div>
      
      <div class="card-body">
 
<ul class="locgiohang" style="display: flex;list-style: none;justify-content: center;color: #BB0;background: antiquewhite;padding: 0;">
<li ><a  style="font-weight: 700; color: #000;" class="dropdown-item" href="index.php?act=dsgh" >Tất cả</a></li>
<li style="padding: 0px 20px;"><a class="dropdown-item" href="index.php?act=cxn">Chờ xác nhận</a></li>
<li style="padding: 0px 20px;"><a class="dropdown-item" href="index.php?act=clh">Chờ lấy hàng</a></li>
<li style="padding: 0px 20px;"><a class="dropdown-item" href="index.php?act=danggiao">Đang giao</a></li>
<li style="padding: 0px 20px;"><a class="dropdown-item" href="index.php?act=dagiao">Đã giao</a></li>
<li style="padding: 0px 20px;"><a class="dropdown-item" href="index.php?act=ch">Chờ hủy</a></li>
<li style="padding: 0px 20px;"><a class="dropdown-item" href="index.php?act=dh">Đã hủy</a></li>
</ul>

      <table class="table" align="center">
  <thead class="table-light">
    <tr align="center">
      <th scope="col">Mã </th>
      <th scope="col">Tên </th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Chi tiết</th>
      <th scope="col">Trạng thái</th>
      <th  style="padding-left: 40px;" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
   foreach($giohang as $gh):
    $soluong= loadall_cart_count($gh['id_bill']);
    $trangthai=  get_ttdh($gh['trangthai']);
   ?>

    <tr align="center">
      <td>DH<?php echo $gh['id_bill']?></td>
    
      <td><?php echo $gh['name_user']?></td>
      <td><?php echo $gh['address']?></td>
      <td><?php echo $gh['phone']?></td>
      <td><?php echo $soluong?></td>
      <td><?php echo $gh['tongtien']?></td>
      <td><a href="index.php?act=chitietbill&id=<?php echo $gh['id_bill']?>">Xem chi tiết</a></td>
      <td><?php echo $trangthai?></td>

      
      
      <td style=" text-align: center;">
          
            <a href="index.php?act=suadh&id=<?php echo $gh['id_bill']?>"><input style="margin: 0px 10px;color: blue;" class="btn btn-primary "type="button" value="Sửa"></a> 
            <!-- <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoatk&id=<?php echo $tk['id_user']?>"><input style="color: red;" class="btn btn-warning "type="button" value="Xóa"></a>  -->
    </td>
    </tr>
   <?php endforeach?>
  </tbody>
</table>

      </div>
    </div>
  </div>
</div>
</div>