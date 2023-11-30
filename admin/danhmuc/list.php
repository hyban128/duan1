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
        <h4>Danh sách danh mục</h4>
      </div>
      <div class="card-body">
      <table class="table table-borderless">
  <thead class="table-light">
    <tr>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên loại</th>
     
      <th style="padding-left: 40px;" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
   foreach($danhmuc as $dm):?>
    <tr>
      <td><?php echo $dm['id_dm']?></td>
    
      <td><?php echo $dm['name']?></td>
      <td>
          
            <a href="index.php?act=suadm&id=<?php echo $dm['id_dm']?>"><input style="margin: 0px 10px;color: blue;" class="btn btn-primary "type="button" value="Sửa"></a> 
            <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoadm&id=<?php echo $dm['id_dm']?>"><input style="color: red;" class="btn btn-warning "type="button" value="Xóa"></a> 
    </td>
    </tr>
   <?php endforeach?>
  

 
    <!-- <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td style="margin: 0px 10px;" class="btn btn-primary btn-sm ">Sửa</td>
      <td class="btn btn-secondary btn-sm" >Xóa</td>
    </tr>
    <tr>
      <td>Leno</td>
      <td>Larry the Bird</td>
      <td>@twitter</td>
      <td style="margin: 0px 10px;" class="btn btn-primary btn-sm ">Sửa</td>
      <td class="btn btn-secondary btn-sm" >Xóa</td>
    </tr> -->
  
  </tbody>
</table>

      </div>
    </div>
  </div>
</div>
</div>