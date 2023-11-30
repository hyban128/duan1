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
        <h4>Danh sách tài khoản</h4>
      </div>
      <div class="card-body">
      <table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">Mã </th>
      <th scope="col">Tên </th>
      <th scope="col">Mật khẩu </th>
      <th scope="col">Email</th>
      <th scope="col">Avata</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Vai trò</th>
      <th  style="padding-left: 40px;" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
   foreach($taikhoan as $tk):?>
    <tr>
      <td><?php echo $tk['id_user']?></td>
    
      <td><?php echo $tk['user']?></td>
      <td><?php echo $tk['pass']?></td>
      <td><?php echo $tk['email']?></td>
      <td>
        
      <img width="80px" src="../upload/<?php echo !isset($tk['avata'])||empty($tk['avata'])?'anh (2).jpg':$tk['avata']?>" alt="">
 
    </td>
      <td><?php echo $tk['address']?></td>
      <td><?php echo $tk['phone']?></td>
      <td><?php echo $tk['role']==1?'ADMIN':'USER'?></td>
      
      <td style="display: flex; flex-direction: row;">
          
            <a href="index.php?act=suatk&id=<?php echo $tk['id_user']?>"><input style="margin: 0px 10px;color: blue;" class="btn btn-primary "type="button" value="Sửa"></a> 
            <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoatk&id=<?php echo $tk['id_user']?>"><input style="color: red;" class="btn btn-warning "type="button" value="Xóa"></a> 
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