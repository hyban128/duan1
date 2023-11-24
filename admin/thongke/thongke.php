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
              <li class="list-group-item">Đơn hàng</li>
              <li class="list-group-item">Thống kê
               
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
        <h4>DANH SÁCH THỐNG KÊ </h4>
      </div>
      <div class="table_light">
        <h4 style="text-align: center;font-size: 15px;border: 1px solid #ccc;margin: 10px;color: red;font-weight: 700; background: antiquewhite;padding: 5px 0px;">Thống kê sản phẩm theo danh mục</h4>
      </div>
      <div class="card-body">
      <table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">Tên loại</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá nhỏ nhất</th>
      <th scope="col">Giá cao nhất</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
   foreach($dsthongke as $ds):?>
    <tr>
    
      <td><?php echo $ds['name']?></td>
      <td><?php echo $ds['soluong']?></td>
      <td><?php echo number_format($ds['gia_min']) .' VND'?></td>
      <td><?php echo number_format($ds['gia_max']) .' VND'?></td>

     
      
    </tr>
   <?php endforeach?>
  </tbody>
</table>
           <a href="?act=bieudo"><input type="button" value="BIỂU ĐỒ"></a>
      </div>
    </div>
  </div>
</div>
</div>
