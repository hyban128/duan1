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
        <h4>Danh sách hàng hóa</h4>
      </div>

      <form action="index.php?act=listhh" method="post">
                      
                        <div class="input-group">
                        <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm sản phẩm tại đây...." aria-label="Recipient's username with two button addons">
                    <select name="iddm" id="" class="btn btn-outline-secondary">
                            <option value="0" selected>Tất cả</option>
                        <?php foreach($danhmuc as $dm): ?>
                    <option value="<?php echo $dm['id_dm']?>"><?php echo $dm['name']?></option>
                    <?php endforeach ?>
                        </select>
                        <input type="submit" class="btn btn-outline-secondary" name="btn-sb" value="Tìm kiếm">

</div>
                    </form>
      <div class="card-body">
      <table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">Mã </th>
      <th scope="col">Tên </th>
      <th scope="col">Giá </th>
      <th scope="col">Ảnh</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Lượt xem</th>
      <th  style="padding-left: 40px;" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
   foreach($sanpham as $sp):?>
    <tr>
      <td><?php echo $sp['id_pro']?></td>
    
      <td><?php echo $sp['name']?></td>
      <td><?php echo $sp['price']?></td>
      <td>
        <img width="100px" src="../upload/<?php echo $sp['img']?>" alt="">
      </td>
      
</div>
      <td><?php echo $sp['mota']?> 
      
    </td>
      
      <td><?php echo $sp['luotxem']?></td>



      <td style="display: flex; flex-direction: row;">
          
            <a href="index.php?act=suahh&id=<?php echo $sp['id_pro']?>"><input style="margin: 0px 10px;color: blue;" class="btn btn-primary "type="button" value="Sửa"></a> 
            <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoahh&id=<?php echo $sp['id_pro']?>"><input style="color: red;" class="btn btn-warning "type="button" value="Xóa"></a> 
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