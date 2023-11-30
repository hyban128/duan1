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
        <h4>Thêm mới biến thể</h4>
      </div>
      <form action="index.php?act=addspbt" method="post">

        <div class="input-group">
          <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm sản phẩm tại đây...." aria-label="Recipient's username with two button addons">

          <input type="submit" class="btn btn-outline-secondary" name="btn-sb" value="Tìm kiếm">

        </div>
      </form>
      <div class="card-body">
        <form method="post" action="index.php?act=addspbt" enctype="multipart/form-data">


          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Size</label>
            <select name="size" id="" class="form-select" aria-label="Default select example">
              <?php
              foreach ($size as $se) : ?>
                <option value="<?php echo $se['id_size'] ?>"><?php echo $se['size'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Color</label>
            <select name="color" id="" class="form-select" aria-label="Default select example">
              <?php
              foreach ($color as $cl) : ?>
                <option value="<?php echo $cl['id_color'] ?>"><?php echo $cl['color'] ?></option>
              <?php endforeach ?>

            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
            <select name="sp" id="" class="form-select" aria-label="Default select example">
              <?php foreach ($sanpham as $sp) : ?>
                      <?php if(isset($spp)):?>
                            <?php if(isset($spp['name'])):?>
                    <option value="<?php echo $sp['id_pro']?>" <?php if($spp['name']==$sp['name']):?> selected <?php endif;?>><?php echo $sp['name']?></option>
                      <?php endif?>
                            <?php else:?>
                              <option value="<?php echo $sp['id_pro'] ?>"><?php echo $sp['name'] ?></option>
                        <?php endif?>

                  
               
              <?php endforeach ?>
            </select>

          </div>
          <!-- <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Số lượng</label>
          <input type="text" name="soluong">
          <div class="mb-3"> -->
          <label for="exampleInputPassword1" class="form-label">Số lượng</label>
          <input type="text" name="soluong" class="form-control" id="exampleInputPassword1">
      </div>
    </div>
    <!-- <input type=text" name="tenloai" class="form-control" id="exampleInputPassword1"> -->
  </div>
  <div class="inputt" style="text-align: center; margin-bottom: 50px;">
    <input type="submit" class="btn btn-primary" name="sb" value="Thêm mới">
    <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  </div>
  </form>

</div>
</div>
</div>
</div>
</div>