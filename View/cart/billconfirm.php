<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Chi tiết hóa đơn</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Cửa Hàng</a></li>
                    <li class="breadcrumb-item active">Thanh toán</li>
                </ul>
                <div class="table-main table-responsive">
                    <table class="table" border="1">
                        
                            <?php
                                                                                  billchitiet($billchitiet);

                            ?>
                       

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<section class="bill">
    <div class="all-title-pay">
        <form action="index.php?act=billconfim" method="post">
            <h1>Thông tin đặt hàng</h1>

            <div class="input-box">
                <input type="text" name="name" placeholder="Người Đặt Hàng" required value="<?php echo $listbill['name_user'] ?>">
                <ion-icon name="person-circle-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="text" name="address" placeholder="Địa chỉ" required value="<?php echo $listbill['address'] ?>">
                <ion-icon name="location-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required value="<?php echo $listbill['email'] ?>">
                <ion-icon name="location-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="number" min="0" name="phone-number" placeholder="Số Điện Thoại" required value="<?php echo $listbill['phone'] ?>">
                <ion-icon name="call-outline"></ion-icon>
            </div>
            <?php
            if (isset($listbill) && is_array($listbill)) {
                extract($listbill);
            }
            ?>
            <div>
                <table>
                    <tr>
                        <td style="padding-right: 80px;"> Mã đơn hàng</td>
                        <td> <input type="text" value="<?php echo $listbill['id_bill'] ?>"></td>
                    </tr>
                    <tr>
                        <td> Ngày đặt hàng</td>
                        <td> <input type="text" value="<?php echo $listbill['ngaydat'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Tổng đơn hàng</td>
                        <td> <input type="text" value="<?php echo $listbill['tongtien'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán</td>
                        <td> <input type="text" value="<?php echo ($listbill['pttt'])==1?'Thanh toán nhận hàng':'Thanh toán thẻ tín dụng'?>"></td>
                    </tr>
                </table>
            </div>
           
            <!-- <a href="index.php?act=camon" style="background: red;padding: 10px 0;padding-left: 45%;padding-right: 45%;color: #fff;">ĐẶT HÀNG</a> -->
        </form>
    </div>
</section>