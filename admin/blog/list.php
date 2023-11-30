<style>
  .an{
  display: block;
  	display: -webkit-box;
  	height: 16px*1.3*3;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 3;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;
  }
</style>
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

            </ul>              <!-- <li class="list-group-item active"></li> -->



             
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="col-md-9">
    <!-- Nội dung trang -->
    <div class="card">
      <div class="card-header">
        <h4>Danh sách blog</h4>
      </div>
      
      <div class="card-body">
      <table class="table" align="center">
  <thead class="table-light">
    <tr>
      <th scope="col">Mã </th>
      <th scope="col">Người đăng </th>
      <th scope="col">Ảnh </th>
      <th scope="col">Title </th>
      <th style="width: 22%;" scope="col">Nội dung</th>
      <th scope="col">Ngày đăng</th>
      <th  style="padding-left: 40px;" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody >
    <?php
   
   foreach($blog as $bg):?>
    <tr>
      <td><?php echo $bg['id_blog']?></td>
    <td><?php echo $bg['user']?></td>
      <td>
      <img width="80px" src="../upload/<?php echo $bg['img']?>" alt="">

    </td>
      <td><?php echo $bg['title']?></td>

      <td class="an"><?php echo $bg['noidung']?></td>

      
</div>
      <td> <?php echo date("d/m/Y", strtotime($bg['ngaydang']))?> 
      
    </td>
      <td style="padding: 20px 0px;">
          
            <a href="index.php?act=updateblog&id=<?php echo $bg['id_blog']?>"><input style="margin: 0px 10px;color: blue;" class="btn btn-primary "type="button" value="Sửa"></a> 
            <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoablog&id=<?php echo $bg['id_blog']?>"><input style="color: red;" class="btn btn-warning "type="button" value="Xóa"></a> 
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