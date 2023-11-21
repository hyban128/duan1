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
        <h4>Danh sách sản phẩm biến thể</h4>
      </div>
      <div class="card-body">
      <table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">ID </th>
      <th scope="col">Name </th>
      <th scope="col">Size</th>
      <th scope="col">Color</th>
      <th scope="col">Số lượng</th>
      <th  style="padding-left: 40px;" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
   foreach($sanphambienthe as $bt):?>
    <tr>
       <td><?php echo $bt['id_bt']?></td>
      <td><?php echo $bt['name']?></td>
      <td><?php echo $bt['size']?></td>
 
      <td><?php echo $bt['color']?></td>
      <td><?php echo $bt['soluong']?></td>



      <td style="display: flex; flex-direction: row;">
          
            <a href="index.php?act=suaspbt&id=<?php echo $bt['id_bt']?>"><input style="margin: 0px 10px;color: blue;" class="btn btn-primary "type="button" value="Sửa"></a> 
            <!-- <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoahh&id=<?php echo $sp['id_pro']?>"><input style="color: red;" class="btn btn-warning "type="button" value="Xóa"></a>  -->
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