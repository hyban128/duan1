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
      <th scope="col">Mã đơn hàng </th>
      <th scope="col">Ngày đặt hàng </th>

      <!-- <th scope="col">Nội dung</th> -->
      <th scope="col">Số lượng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
       <?php 
       if(isset($listdonhang)){?>
           <?php foreach($listdonhang as $bill):?>
              <?php extract($bill)?>
             <?php $ttdh=get_ttdh($bill['trangthai']);
              $count_sp=loadall_cart_count($bill['id_bill']);
              ?>
               <tr>
              <td><?php echo $bill['id_bill']?></td>
              <td><?php  echo date("d/m/Y", strtotime($bill['ngaydat']))?></td>
              <td><?php echo $count_sp?> </td>
              <td> <?php echo $bill['tongtien']?></td>
              <td><?php echo $ttdh?> </td>
            
              <td style="display: flex;"><a style="margin: 0px 15px;" href="index.php?act=chitietdonhang&idbill=<?php echo $bill['id_bill']?>"><i style="color: red;" class="gg-browse"></i> </a>
                 <?php 
                         if($bill['trangthai']==0){?>
                          <a onclick="return confirm('Bạn muốn hủy đơn hàng này?')" href="index.php?act=huydh&id=<?php echo $bill['id_bill']?>"><i class="fa fa-trash-o" style="font-size:23px"></i></a>

                        <?php }else{ ?>
                          <a  href="index.php?act=huydh&id=<?php echo $bill['id_bill']?>"><i class="fa fa-trash-o" style="font-size:23px"></i></a>

                        <?php }
                 ?>
              </td>
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