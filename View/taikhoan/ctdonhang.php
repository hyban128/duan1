<div style="margin-bottom: 100px;"></div>

<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


</header>
<div style="margin-bottom: 20px;"></div>
<div class="row">
    <div class="col-md-3">
        <!-- Sidebar -->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Đơn hàng của tôi
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="">
                        <ul class="list-group">
                            <!-- <li class="list-group-item active"></li> -->



                            <li class="list-group-item">
                                <a href="index.php?act=thongtin"><i style="padding: 0 5px;" class="fa-solid fa-pen-to-square"></i>Cập nhật tài khoản</a>

                            </li>
                            <li class="list-group-item">
                                    <a href="index.php?act=doimk"><i style="padding: 0 5px;" class="fa-solid fa-key"></i>Đổi mật khẩu</a>
                            </li>
                            <li class="list-group-item"><a href="index.php?act=mycart">
                                <i style="padding: 0 5px;" class="fa-solid fa-cart-shopping"></i>Đơn hàng</a></li>
                                <?php 
                              if(($_SESSION['taikhoan']['role'])==1):?>
                                <li class="list-group-item">
                                <a href="admin/index.php"><i style="padding: 0 5px;" class="fa-solid fa-screwdriver-wrench"></i>Đăng nhập admin</a>
                            </li>
                              
                          <?php   endif ?>
                            <li class="list-group-item">
                            <a href="index.php?act=logout"><i style="padding: 0 5px;" class="fa-solid fa-right-from-bracket"></i>Thoát</a> </li>

                            

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
        <h4>Đơn hàng của tôi</h4>
      </div>
      <div style="margin-bottom: 20px;">
    </div>

      <div class="card-body">
      <table class="table">
  <thead class="table-light">
    <tr>
      <!-- <th scope="col">User</th> -->
      <th scope="col">Ảnh sản phẩm </th>
      <th scope="col">Tên  </th>

      <!-- <th scope="col">Nội dung</th> -->
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Color</th>
      <th scope="col">Size</th>
      <th scope="col">Tiền</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
       <?php 
       if(isset($chitietdh)){?>
           <?php foreach($chitietdh as $ct):?>
              <?php extract($ct)?>
          
               <tr>
              <td> <img style="width: 78px;height: 70px;" src="upload/<?php echo $ct['img_sp']?>" alt=""></td>
              <td><?php echo $ct['tensp']?></td>
              <td><?php echo $ct['price']?></td>
              <td><?php echo $ct['soluong']?></td>
              <td><?php echo $ct['color']==3?'Trắng':'Đen'?> </td>
              <td> <?php echo $ct['size']==3?'M':'S'?></td>
              <td> <?php echo $ct['thanhtien']?></td>
              
              <td style="padding: 0 25px;"><a href="index.php?act=mycart"><i class="fa fa-sign-out" style="font-size:24px;text-align: center;"></i></a></td>
          </tr>
          <?php endforeach ?>
           <?php }?>
   
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
</div>