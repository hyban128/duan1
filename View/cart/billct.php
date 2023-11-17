<section class="bill">
            <div class="all-title-pay">
                <form action="" method="post">
                    <h1>Thông tin đặt hàng</h1>
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Người Đặt Hàng"  required>
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="text"name="address" placeholder="Địa chỉ" required>
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
                <div class="choose-pay">
                    <h4>Phương Thức Thanh Toán</h4>
                    <div class="check-box">
                        <input type="radio" name="option" id="checkbox1" onchange="uncheck()">
                        <label for="">Thanh Toán Khi Nhận Hàng</label>
                    </div>
                    <div class="check-box">
                        <input type="radio" name="option" id="checkbox2" onchange="uncheck()">
                        <label for="">Thẻ Tín Dụng</label>
                    </div>
                    <button class="btn-pay">Tính Tiền</button>
                </div>
                </form>
            </div>
        </section>
        <div class="cart-box-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-main table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá Tiền Sản Phẩm</th>
                                        <th>Số Lượng Sản Phẩm</th>
                                        <th>Tổng Tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                        <img class="img-fluid" src="img/aopolo.webp" alt="" />
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
                                        <td class="quantity buttons_added"><input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus"></td>
                                        <td class="total-pr">
                                            <p>450.000 <u>đ</u></p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-8 col-sm-12"></div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="order-box">
                            <h3>Hóa Đơn</h3>
                            <div class="d-flex gr-total">
                                <h5>Tổng Tiền</h5>
                                <div class="ml-auto h5">499.000 <u>đ</u></div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>    

       
