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
                                <a href="index.php?act=thongtin"><i style="padding: 0 5px;" class="fa-solid fa-pen-to-square"></i>Cập nhật tài khoản</a>

                            </li>
                            <li class="list-group-item">
                                    <a href="index.php?act=doimk"><i style="padding: 0 5px;" class="fa-solid fa-key"></i>Đổi mật khẩu</a>
                            </li>
                            <li class="list-group-item"><a href="index.php?act=donhang">
                                <i style="padding: 0 5px;" class="fa-solid fa-cart-shopping"></i>Đơn hàng</a></li>
                            <li class="list-group-item">
                                <a href="admin/index.php"><i style="padding: 0 5px;" class="fa-solid fa-screwdriver-wrench"></i>Đăng nhập admin</a>
                            </li>
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
      <th scope="col">Tên sản phẩm </th>
      <th scope="col">Ảnhsản phẩm </th>

      <!-- <th scope="col">Nội dung</th> -->
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
      
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>name</td>
        <td><img src="../../upload/ô tô.jpg" alt=""></td>
        <td>12/11/2023</td>
        <td>5</td>
        <td>2500</td>
        <td><a href="">Xem chi tiết</a></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
</div>