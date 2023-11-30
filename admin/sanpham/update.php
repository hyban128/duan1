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
        <h4>Cập nhật hàng hóa</h4>
      </div>
      <div style="margin-bottom: 20px;">
    </div>

      <div class="card-body">
      <form action="index.php?act=updatespbt" method="post" enctype="multipart/form-data">


          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" name="tensp" class="form-control" id="exampleInputPassword1" disabled placeholder="Auto number" value="<?php echo $spbt['name']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Size</label>
            <select name="size" id="" class="form-select" aria-label="Default select example">
            <?php
               foreach($size as $se):?>
                     <option value="<?php echo $se['id_size']?>"<?php echo $se['id_size']==$spbt['id_size']?'selected':""?>><?php echo $se['size']?></option>
             <?php endforeach ?>
             </select>
          </div>
         
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Color</label> <br>
            <select name="color" id="" class="form-select" aria-label="Default select example">
            <?php
               foreach($color as $cl):?>
                     <option value="<?php echo $cl['id_color']?>"<?php echo $cl['id_color']==$spbt['id_color']?'selected':""?>><?php echo $cl['color']?></option>
             <?php endforeach ?>
             </select>
          </div>
         
          <input type="hidden" name="id_bt" value="<?php echo $spbt['id_bt']?>">
          <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

      </div>
    </div>
  </div>
</div>
</div>