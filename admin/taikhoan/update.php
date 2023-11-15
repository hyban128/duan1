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



              <li class="list-group-item"><a href="">Danh mục</a>
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
              <li class="list-group-item"><a href="">Sản phẩm</a></li>
              <li class="list-group-item">Tài khoản
                <ul>
                  <li><a href="index.php?act=addtk">Thêm mới</a></li>
                  <li><a href="index.php?act=listtk">Danh sách</a></li>
                </ul>
              </li>
              <li class="list-group-item">Bình luận</li>
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
        <h4>Cập nhật tài khoản</h4>
      </div>
      <div style="margin-bottom: 20px;">
    </div>

      <div class="card-body">
      <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên tài khoản</label>
            <input type="text" name="user" class="form-control" id="exampleInputPassword1" value="<?php echo $tk['user']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type="text" name="pass" class="form-control" id="exampleInputPassword1" value="<?php echo $tk['pass']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo $tk['email']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="<?php echo $tk['address']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Avata</label>
            <input type="file" name="avata" class="form-control" id="exampleInputPassword1" value="<?php echo $tk['avata']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $tk['phone']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Vai trò</label>
            <div class="mb-3">
                    <select name="role" id="" class="form-control" id="exampleInputPassword1">
                    <option value="0"<?php echo $tk['role']==0?'selected':''?>>USER</option>
                    <option value="1" <?php echo $tk['role']==1?'selected':''?>>ADMIN</option>
                 </select>
        </div>
          </div>
          <input type="hidden" name="id" value="<?php echo $tk['id_user']?>">
          <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

      </div>
    </div>
  </div>
</div>
</div>