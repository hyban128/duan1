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
              <li class="list-group-item">Đơn hàng</li>
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
        <h4>Thêm mới blog</h4>
      </div>
      <div class="card-body">
        <form method="post" action="index.php?act=addblog" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ảnh blog</label>
            <input type="file" class="form-control" name="image" id="exampleInputEmail1" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tiêu đề</label>
            <input type="text" name="title" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nội dung</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control" id="exampleInputPassword1">  </textarea>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ngày đăng</label>
            <input type="date" name="" class="form-control" id="exampleInputPassword1">
          </div>
          <input type="hidden" class="btn btn-primary" name="iduser" value="<?php echo $id?>">
          <input type="submit" class="btn btn-primary" name="them" value="Thêm mới">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>
  
      </div>
    </div>
  </div>
</div>
</div>