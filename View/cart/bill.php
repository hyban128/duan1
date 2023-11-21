
<div class="cart-box-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h2>Thanh toán</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Cửa Hàng</a></li>
                        <li class="breadcrumb-item active">Thanh toán</li>
                    </ul>
                        <div class="table-main table-responsive">
                            <table class="table" border="1">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá Tiền Sản Phẩm</th>
                                        <th>Số Lượng Sản Phẩm</th>
                                        <th>Size</th>
                                        <th>Màu</th>
                                        <th>Thành Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img style="width: 50px;" class="img-fluid" src="View/img/aopolo.webp" alt="" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="single-product.html">
                                                Áo polo 14ATP004
                                            </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>450.000 <u>đ</u></p>
                                        </td>
                                        <td class="price-pr">
                                            <p>1 </p>
                                        </td>
                                        <td class="price-pr">
                                            <p>S</p>
                                        </td>
                                        <td class="price-pr">
                                            <p>Trắng </p>
                                        </td>
                                        <td class="total-pr">
                                            <p>450.000 <u>đ</u></p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="background-color: #ccc;" colspan="6">Tổng tiền</td>
                                        <td style="font-weight: 800;background-color:#ccc" class="total-pr">
                                            <p>450.000 <u>đ</u></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       <section class="bill">
            <div class="all-title-pay">
                <form action="" method="post">
                    <h1>Thông tin đặt hàng</h1>
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Người Đặt Hàng" required>
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="text" name="address" placeholder="Địa chỉ" required>
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="number" min="0" name="phone-number" placeholder="Số Điện Thoại" required>
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="tt" style="margin-bottom: 20px;">
                        <h4>Phương Thức Thanh Toán</h4>
                        <!-- <td><input type="radio" name="pttt" value="1" id="" checked>Thanh toán khi nhận hàng</td>

                            <td><input type="radio" name="pttt" value="2" id="" >Thẻ tín dụng</td> -->
                        <div class="check">
                            <input type="radio" name="pttt" id="checkbox1">
                            <label for="">Thanh Toán Khi Nhận Hàng</label>
                        </div>
                        <div class="check">
                            <input type="radio" name="pttt" id="checkbox2">
                            <label for="">Thẻ Tín Dụng</label>
                        </div>

                    </div>
                    <a href="index.php?act=camon" style="background: red;padding: 10px 0;padding-left: 45%;padding-right: 45%;color: #fff;">ĐẶT HÀNG</a>
                </form>
            </div>
        </section>
        