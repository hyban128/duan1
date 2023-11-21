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
              <li class="list-group-item">Thống kê</li>

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
        <h4>Đăng ký tài khoản</h4>
      </div>
      <div class="card-body">
        <form method="post" action="index.php?act=addtk">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên đăng nhập</label>
            <input type=text" name="user" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type=text" name="pass" class="form-control" id="exampleInputPassword1">
          </div>

          <input type="submit" class="btn btn-primary" name="dangky" value="Thêm mới">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>
  
      </div>
    </div>
  </div>
</div>
</div>