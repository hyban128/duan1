<?php
if (isset($spbt_sp)) {
    extract($spbt_sp);
}
?>
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="upload/<?php echo $img ?>" alt="" height="100%">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?php echo $name ?></h4>
                    <div>
                        <span class="price"><?php
                                            $tt = $price  - (($price * $discount) / 100);
                                            echo number_format($tt);
                                            ?> VNĐ</span>
                    </div>

                    <ul class="stars">
                        <li style="color: #000;width: 20px;"> <i class="fa-regular fa-eye" style="color: red;padding: 0 5px;"></i><?php echo $luotxem + 1 ?></li> <br>

                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>

                    </ul>
                    <span>MÔ TẢ SẢN PHẨM</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p><?php echo $mota ?></p>
                    </div>
                    <!-- <div class="quantity-content">
                        <div class="left-content" >
                            <h6 style="padding-top: 0;">Chọn Màu</h6>
                        </div>
                        <div class="right-content">


                            <select style="width: 50%; display: inline-block;" name="color" id="" class="form-select" aria-label="Default select example">
                            <?php foreach ($color as $c) : ?>
                                <option value="<?php echo $c['id_color'] ?>"><?php echo $c['color'] ?></option>
                               <?php endforeach ?>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="quantity-content">
                        <div class="left-content">
                            <h6>Chọn Size</h6>
                        </div>
                        <div class="right-content">
                            <select name="size" id="Size">
                                <?php foreach ($size as $s) : ?>
                                <option value="<?php echo $s['id_size'] ?>"><?php echo $s['size'] ?></option>
                                <?php endforeach ?>
                               
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="quantity-content">
                        <div class="left-content">
                            <h6 style="padding-top: 0;">Số Lượng</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">

                                <input style="text-align: center;" type="number" value="1" id="quantity" name="quantity" min="1" max="5">
                            </div>
                        </div>
                    </div> -->
                    <div class="total">
                        <!-- <h4>Thành Tiền:450000d</h4> -->
                        <div class="main-border-button">
                            <?php if($spbt){?>
                                <form action="index.php?act=addcart" class="themgiohang" method="post">
                                <input type="hidden" name="id" value="<?php echo $id_pro ?>">
                                <input type="hidden" name="name" value="<?php echo $name ?>">
                                <input type="hidden" name="img" value="<?php echo $img ?>">
                                <div class="quantity-content">
                                    <div class="left-content">
                                        <h6 style="padding-top: 0;">Chọn Màu</h6>
                                    </div>
                                    <div class="right-content">


                                        <select style="width: 50%; display: inline-block;" name="color" id="" class="form-select" aria-label="Default select example">
                                            <?php foreach ($spbt as $c) : ?>

                                                <option value="<?php echo $c['id_color'] ?>" > <?php echo $c['color'] ?></option>
                                            <?php endforeach ?>

                                        </select>

                                    </div>
                                </div>
                                <div class="quantity-content">
                                    <div class="left-content">
                                        <h6>Chọn Size</h6>
                                    </div>
                                    <div class="right-content">
                                        <select name="size" id="Size">
                                            <?php foreach ($spbt as $s) : ?>
                                                <option value="<?php echo $s['id_size'] ?>"><?php echo $s['size'] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="quantity-content">
                                    <div class="left-content">
                                        <h6 style="padding-top: 0;">Số Lượng</h6>
                                    </div>
                                    <div class="right-content">
                                        <div class="quantity buttons_added">

                                            <input style="text-align: center;" type="number" value="1" id="quantity" name="soluong" min="1" max="5">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="price" value="<?php echo $price - (($price * $discount) / 100) ?>">




                                <input style="padding: 5px;background: mediumvioletred;border: 1px solid #ccc;color: #fff;" type="submit" name="addcart" value="Thêm giỏ hàng">
                            </form>
                          <?php }else{ ?>
                            <form action="index.php?act=addcart" class="themgiohang" method="post">
                                <input type="hidden" name="id" value="<?php echo $id_pro ?>">
                                <input type="hidden" name="name" value="<?php echo $name ?>">
                                <input type="hidden" name="img" value="<?php echo $img ?>">
                                <div class="quantity-content">
                        
                                            <input style="text-align: center;" type="number" value="1" id="quantity" name="soluong" min="1" max="5">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="price" value="<?php echo $price - (($price * $discount) / 100) ?>">
                                <input style="padding: 5px;background: mediumvioletred;border: 1px solid #ccc; color: #fff;float: right;" type="submit" name="addcart" value="Thêm giỏ hàng">
                            </form>
                          <?php } ?>
                            
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="title-commentproduct" style="text-align: center;">
                    <h5 style="text-align: center;margin-bottom: 15px;margin-top: 50px;">Bình luận sản phẩm</h5>

                    <div class="input-comment">
                        <?php
                        if (isset($_SESSION['taikhoan'])) { ?>
                            <div class="search">
                                <form action="index.php?act=chitietsp&idsp=<?php echo $onesp['id_pro'] ?>" method="post">
                                    <input type="hidden" name="idpro" value="<?php echo $onesp['id_pro'] ?>">
                                    <div>


                                        <input style="padding: 5px;margin-bottom: 15px;width: 50%;" type="text" name="noidung" id="review">
                                    </div>
                                    <input style="width: 15%; margin-bottom: 50px;" type="submit" value="Xác nhận" class="btn-cmt" name="guibinhluan">
                                    <!-- <button onclick="submitReview()" class="btn-cmt" name="guibinhluan">Gửi bình luận</button>  -->
                                    <span><?php if (isset($err['noidung'])) {
                                                echo $err['noidung'];
                                            } ?></span>

                                </form>
                            </div>
                        <?php } else { ?>
                            <p style="color: red; font-size: 15px;padding-left: 20px;"> <a style="color: red;" href="index.php?act=dangnhap">Vui lòng đăng nhập</a></p>
                        <?php } ?>
                        <!-- <textarea id="review"></textarea>
                    <button onclick="submitReview()" class="btn-cmt">Gửi bình luận</button> -->
                    </div>
                    <div id="reviews-container">
                    </div>
                </div>
            </div>
            <div class="container">

          
            <div class="comment">

                <div class="" style="margin-top: 0;">

                    <?php foreach ($binhluan as $bl) : ?>
                        <div class="" style=" padding: 10px 15px;border: 1px solid #ccc;">


                            <div style="display: flex;flex-direction: row;">
                                <img src="upload/<?php echo !isset($bl['avata']) || empty($bl['avata']) ? 'anh (2).jpg' : $bl['avata'] ?>" alt="User Avatar" class="avatar">

                                <h6 style="line-height: 50px;"><?php echo $bl['user'] ?></h6>

                            </div>

                            <p><?php echo $bl['noidung'] ?></p>
                            <p style="font-size: 10px ;opacity: 0.5;"><?php echo  date("d/m/Y", strtotime($bl['ngaybl'])) ?></p>
                        </div>
                </div>

            <?php endforeach ?>

            </div>
            </div>
            <section class="section" id="men">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <h5 style="float: left;">Có thể bạn cũng thích</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="men-item-carousel">
                                <div class="owl-men-item owl-carousel">
                                 <?php foreach($sp_cungloai as $sp):?>
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="index.php?act=chitietsp&idsp=<?php echo $sp['id_pro']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="upload/<?php echo $sp['img']?>" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4 style="text-align: center;"><?php echo $sp['name']?></h4>
                                            <div class="nnn" style="    display: flex;justify-content: center;">
                                            <span style="text-decoration: line-through;">
                                    <?php echo number_format($sp['price']); ?> VNĐ
                                </span>
                                            <span style="padding-left: 10px; font-weight: 500;color: red;">
                                            <?php 
                                        $tt = $sp['price']  - (($sp['price'] * $sp['discount']) / 100);
                                        echo number_format($tt);
                                    ?> VNĐ     
                                    </span>    
                                            </div>                                 
                                        </div>
                                        
                                    </div>
                           <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>