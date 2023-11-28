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
        <h4>Cập nhật đơn hàng</h4>
      </div>
      <div style="margin-bottom: 20px;">
    </div>

      <div class="card-body">
      <form action="index.php?act=updatedh" method="post" >
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Khách hàng</label>
            <input type="text" name="user" class="form-control" id="exampleInputPassword1" value="<?php echo $onebill['name_user']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="<?php echo $onebill['address']?>">
          </div>     
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $onebill['phone']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1"  >Trạng thái</label> <br>
                <select name="trangthai" id="" class="form-control" id="exampleInputPassword1">
                    <option value="0" <?php echo $onebill['trangthai']==0?'selected':""?>>Chờ xác nhận</option>
                    <option value="1" <?php echo $onebill['trangthai']==1?'selected':""?>>Chờ lấy hàng</option>
                    <option value="2" <?php echo $onebill['trangthai']==2?'selected':""?>>Đang giao</option>
                    <option value="3" <?php echo $onebill['trangthai']==1?'selected':""?>>Đã giao</option>

                </select>
          </div>
          <input type="hidden" name="id" value="<?php echo $onebill['id_bill']?>">
          <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

      </div>
    </div>
  </div>
</div>
</div>