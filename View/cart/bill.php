<?php 
if(empty($_SESSION['cart'])){
    header("location:index.php?act=giohang");
}
?>
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
                                        <th>Sản Phẩm</th>
                                        <th>Giá Tiền </th>
                                        <th>Số Lượng</th>
                                        <th>Size</th>
                                        <th>Màu</th>
                                        <th>Thành Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $tong=0;
                                    $i=0;
                                    foreach($_SESSION['cart'] as $cart){
                                        $hinh="upload/".$cart[2];
                                        $tongtien=$cart[3]*$cart[4];
                                        $tong+=$tongtien;
                                        echo' <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img style="width: 50px;" class="img-fluid" src="'.$hinh.'" alt="" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                                '.$cart[1].'
                                        </td>
                                        <td class="price-pr">
                                            <p>'.$cart[3].'</p>
                                        </td>
                                        <td class="price-pr">
                                            <p>'.$cart[4].'</p>
                                        </td>
                                        <td class="price-pr">
                                            <p>'.($cart[6]==3?'M':'S').'</p>
                                        </td>
                                        <td class="price-pr">
                                            <p>'.($cart[5]==3?'Trắng':'Đen').'</p>
                                        </td>
                                        <td class="total-pr">
                                            <p>'.$tongtien.'</p>
                                        </td>

                                    </tr>';
                                    $i+=1;
                                    }
                                   echo'
                                   
                                    <tr>
                                        <td style="background-color: #ccc;" colspan="6">Tổng tiền</td>
                                        <td style="font-weight: 800;background-color:#ccc" class="total-pr">
                                            <p>'.$tong.'</p>
                                        </td>
                                    </tr>';
                                    ?>
                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       <section class="bill">
            <div class="all-title-pay">
                <form action="index.php?act=camon" method="post">
                    <h1>Thông tin đặt hàng</h1>
                    <?php 
                         if(isset($_SESSION['taikhoan'])){
                                $name=$_SESSION['taikhoan']['user'];
                                $address=$_SESSION['taikhoan']['address'];
                                $email=$_SESSION['taikhoan']['email'];
                                $phone=$_SESSION['taikhoan']['phone'];
                         }else{
                            $name="";
                                $address="";
                                $email="";
                                $phone="";
                         }
                    ?>
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Người Đặt Hàng" required value="<?php echo $name?>">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="text" name="address" placeholder="Địa chỉ" required  value="<?php echo $address?>">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required  value="<?php echo $email?>">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                    <div class="input-box">
                        <input type="number" min="0" name="phone" placeholder="Số Điện Thoại" required  value="<?php echo $phone?>">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="tt" style="margin-bottom: 20px;">
                        <h4>Phương Thức Thanh Toán</h4>
                        <!-- <td><input type="radio" name="pttt" value="1" id="" checked>Thanh toán khi nhận hàng</td>

                            <td><input type="radio" name="pttt" value="2" id="" >Thẻ tín dụng</td> -->
                        <div class="check">
                            <input type="radio" name="pttt" id="checkbox1" value="1">
                            <label for="">Thanh Toán Khi Nhận Hàng</label>
                        </div>
                        <div class="check">
                            <input type="radio" name="pttt" id="checkbox2" value="2">
                            <label for="">Thẻ Tín Dụng</label>
                        </div>

                    </div>
                    <input onclick="return confirm('Bạn chắc chắn đặt hàng!!!')" style="background: red;padding: 10px 0;padding-left: 45%;padding-right: 45%;color: #fff;border-radius: 25px;" type="submit" value="ĐẶT HÀNG" name="dathang">
                    <!-- <a href="index.php?act=camon" style="background: red;padding: 10px 0;padding-left: 45%;padding-right: 45%;color: #fff;">ĐẶT HÀNG</a> -->
                </form>
            </div>
        </section>
        