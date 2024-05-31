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
        <h4>Cập nhật hàng hóa</h4>
      </div>
      <div style="margin-bottom: 20px;">
    </div>

      <div class="card-body">
      <form action="index.php?act=updatehh" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                        <select name="iddm" id="" class="form-control" id="exampleInputPassword1">
                        <?php foreach($danhmuc as $dm): ?>
                    <option value="<?php echo $dm['id_dm']?>" <?php echo $dm['id_dm']==$sanpham['iddm']?'selected':""?>><?php echo $dm['name']?></option>
                    <?php endforeach ?>
                        </select>
        </div>
                      

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tensp" class="form-control" id="exampleInputPassword1" value="<?php echo $sanpham['name']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
            <input type="text" name="giasp" class="form-control" id="exampleInputPassword1" value="<?php echo $sanpham['price']?>">
          </div>
          <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giảm giá</label>
            <input type=text" name="giamgia" class="form-control" id="exampleInputPassword1" value="<?php echo $sanpham['discount']?>">
          </div> -->
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ảnh sản phẩm</label> <br>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">

            <img style="width: 100px;margin-top: 15px;" src="../upload/<?php echo $sanpham['img']?>" alt="">
          </div>
         
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Thông tin sản phẩm</label>
            <textarea name="mota" id="" cols="30" rows="10" class="form-control" id="exampleInputPassword1"><?php echo $sanpham['mota']?>  </textarea>
          
          
          </div>
          <input type="hidden" name="id" value="<?php echo $sanpham['id_pro']?>">
          <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

      </div>
    </div>
  </div>
</div>
</div>