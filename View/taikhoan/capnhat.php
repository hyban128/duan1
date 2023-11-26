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
                        Thông tin chi tiết
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="">
                        <ul class="list-group">
                            <!-- <li class="list-group-item active"></li> -->



                            <li class="list-group-item">
                                <a href="index.php?act=updatetk&id=<?php $id_user?>"><i style="padding: 0 5px;" class="fa-solid fa-pen-to-square"></i>Cập nhật tài khoản</a>

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
        <h4>Cập nhật tài khoản</h4>
      </div>
      <div style="margin-bottom: 20px;">
    </div>

      <div class="card-body">
      <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
      <div style="text-align: center;" class="mb-3">
      <img style="border-radius: 50%; width: 150px;" src="upload/<?php echo !isset($avata)||empty($avata)?'anh (2).jpg':$avata?>" alt=""> <br>
          <input style="    margin-top: 30px;width: 110px;" type="file" name="avata"  >
  
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên tài khoản</label>
            <input type="text" name="user" class="form-control" id="exampleInputPassword1" value="<?php echo $user?>">
          </div>
         
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo $email?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="<?php echo $taikhoanm['address']?>">
          </div>
         
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $phone?>">
          </div>
    
          <input type="hidden" name="id" value="<?php echo $id_user?>">
          <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
          <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

      </div>
    </div>
  </div>
</div>
</div>