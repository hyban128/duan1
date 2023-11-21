<div class="title-box">
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Giỏ Hàng</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Cửa Hàng</a></li>
                        <li class="breadcrumb-item active">Giỏ Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá Tiền</th>
                                    <th>Số Lượng </th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Tổng Tiền</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tong=0;
                                $i=0; /*Xoa theo vi tri */
                                foreach ($_SESSION['cart'] as $cart){
                                           
                                        //    $tongtien=$cart[3]*$cart[4];
                                            $tong+=$cart[3]*$cart[4];
                                            
                               echo'  <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img style="width: 50px;" class="img-fluid" src="upload/'.$cart['2'].'" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        '.$cart[1].'
                                    </td>
                                    <td class="price-pr">
                                        <p>'.$cart['3'].'</p>
                                    </td>
                                    <td>
                                    '.$cart['4'].'
                                    </td>
                                    <td>
                                    <p>'.($cart['6']==3?'M':'S').'</p>
                                  </td>
                                  <td>
                                    <p>'.($cart['5']==3?'Trang':'Den').'</p>
                                  </td>
                                    <td class="total-pr">
                                        <p>'.$cart['4']*$cart['3'].'</p>
                                    </td>
                                  
                                    <td class="remove-pr">
                                        <a href="index.php?act=deletecart&idcart='.$i.'">
                                            <i class="fas fa-times"><input type="button"></i>
                                        </a>
                                    </td>
                                  
                                </tr>
                                <tr>';
                                $i+=1;
                            }
                                       echo' <td style="background-color: #ccc;" colspan="6">Tổng tiền</td>
                                        <td style="font-weight: 800;background-color:#ccc" class="total-pr">
                                            <p>'.$tong.'</p>
                                        </td>
                                    
                                     <td style="background-color: #ccc;">
                                     <a  href="index.php?act=bill"><input style="background: blue; border: none;padding: 0 5px;   color: orange; font-weight: 800;" value="Thanh Toán" type="submit"></a> 

                                     </td>
                        
                                    </tr>';
                                    ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
           
            <section class="section" id="men">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <h6 style="float: left;">Có thể bạn cũng thích</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="men-item-carousel">
                                <div class="owl-men-item owl-carousel">
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="View/img/aopolo2.webp" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>Áo Polo 14ATP004</h4>
                                            <span>450.000 <u>đ</u></span>
                                          
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</div>
</div>
</div>