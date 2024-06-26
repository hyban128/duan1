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

            </ul>
  

          
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="col-md-9">
    <!-- Nội dung trang -->
    <div class="card">
      <div class="card-header">
        <h4>Chi tiết bình luận</h4>
      </div>
      <div class="card-body">
      <table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">Ảnh sản phẩm</th>
      <th scope="col">Tên </th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Color</th>
      <th scope="col">Size</th>
      <th scope="col">Tiền</th>
      <th scope="col">Chức năng</th>

    </tr>
  </thead>
  <tbody>
    <?php
   foreach( $chitietdh as $ct):?>
    <tr>
    <td> <img style="width: 78px;height: 70px;" src="../upload/<?php echo $ct['img_sp']?>" alt=""></td>
              <td><?php echo $ct['tensp']?></td>
              <td><?php echo $ct['price']?></td>
              <td><?php echo $ct['soluong']?></td>
              <td><?php echo $ct['color']==3?'Trắng':'Đen'?> </td>
              <td> <?php echo $ct['size']==3?'M':'S'?></td>
              <td> <?php echo $ct['thanhtien']?></td>
              <td><a href="index.php?act=dsgh">Quay lại</a></td>
    </tr>
   <?php endforeach?>
  </tbody>
</table>

      </div>
    </div>
  </div>
</div>
</div>