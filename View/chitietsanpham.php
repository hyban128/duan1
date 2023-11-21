<?php
if(isset($onesp)){
    extract($onesp);
}
?>
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="upload/<?php echo $img?>" alt="" height="100%">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?php echo $name?></h4>
                    <div>
                    <span class="price"><?php 
                                        $tt = $price  - (($price * $discount) / 100);
                                        echo number_format($tt);
                                    ?> VNĐ</span>
                    </div>
                  
                    <ul class="stars">
                    <li style="color: #000;width: 20px;"> <i class="fa-regular fa-eye" style="color: red;padding: 0 5px;"></i><?php echo $luotxem+1?></li> <br>

                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        
                    </ul>
                    <span>MÔ TẢ SẢN PHẨM</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p><?php echo $mota?></p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content" >
                            <h6 style="padding-top: 0;">Chọn Màu</h6>
                        </div>
                        <div class="right-content">


                            <select style="width: 50%; display: inline-block;" name="color" id="" class="form-select" aria-label="Default select example">
                            <?php foreach ($color as $c):?>
                                <option value="<?php echo $c['id_color']?>"><?php echo $c['color']?></option>
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
                                <?php foreach($size as $s):?>
                                <option value="<?php echo $s['id_size']?>"><?php echo $s['size']?></option>
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

                                <input style="text-align: center;" type="number" value="1" id="quantity" name="quantity" min="1" max="5">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <!-- <h4>Thành Tiền:450000d</h4> -->
                        <div class="main-border-button">
                            
                        <form action="index.php?act=addcart" class="themgiohang" method="post">
                            <input type="text" name="id" value="<?php echo $id_pro?>">
                            <input type="text" name="name" value="<?php echo $name?>">
                            <input type="text" name="img" value="<?php echo $img?>">
                           So luong <input style="text-align: center;" type="number" value="1" id="quantity" name="soluong" min="1" max="5">

                           Gia <input type="text" name="price" value="<?php echo $price - (($price * $discount) / 100)?>">
                         Size <select name="size" id="Size">
                                <?php foreach($size as $s):?>
                                <option value="<?php echo $s['id_size']?>"><?php echo $s['size']?></option>
                                <?php endforeach ?>
                                </select>

                        Color 
                        <select  name="color" id="color">
                            <?php foreach ($color as $c):?>
                                <option value="<?php echo $c['id_color']?>"><?php echo $c['color']?></option>
                               <?php endforeach ?>
                            </select>
                            
                            <input type="submit" name="addcart" value="Them gio hang">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="">
                <div class="title-commentproduct" style="text-align: center;">
                    <h5 style="text-align: center;margin-bottom: 15px;margin-top: 50px;">Bình luận sản phẩm</h5>
               
                <div class="input-comment">
                <?php
                    if(isset($_SESSION['taikhoan'])){?>
                    <div class="search">
                    <form action="index.php?act=chitietsp&idsp=<?php echo $onesp['id_pro']?>" method="post">
                        <input type="hidden" name="idpro" value="<?php echo $onesp['id_pro']?>">
                        <div>

                       
                        <input style="padding: 5px;margin-bottom: 15px;width: 50%;" type="text" name="noidung" id="review">
                        </div>
                        <input style="width: 15%; margin-bottom: 50px;" type="submit"  value="Xác nhận" class="btn-cmt" name="guibinhluan">
                        <!-- <button onclick="submitReview()" class="btn-cmt" name="guibinhluan">Gửi bình luận</button>  -->
                        <span><?php if(isset($err['noidung'])){
                            echo $err['noidung'];
                            }?></span>

                    </form>
                </div>
                   <?php } else{?>
                    <p  style="color: red; font-size: 15px;padding-left: 20px;">Vui lòng đăng nhập</p>
                  <?php }?>
                    <!-- <textarea id="review"></textarea>
                    <button onclick="submitReview()" class="btn-cmt">Gửi bình luận</button> -->
                </div>
                <div id="reviews-container">
                </div>
            </div>
        </div>
        <div class="comment">

            <div class="" style="margin-top: 0;">

            <?php foreach($binhluan as $bl):?>
                <div style=" padding: 10px 15px;border: 1px solid #ccc;">

                
                <div style="display: flex;flex-direction: row;">
                <img src="upload/<?php echo !isset($bl['avata'])||empty($bl['avata'])?'anh (2).jpg':$bl['avata']?>" alt="User Avatar" class="avatar">

                <h5 style="line-height: 50px;"><?php echo $bl['user']?></h5>

                </div>
                
                <p><?php echo $bl['noidung']?></p>
                <p><?php echo  date("d/m/Y", strtotime($bl['ngaybl']))?></p>
                </div>
              </div>

                   <?php endforeach?>
                
            </div>
            <!-- <div class="comment">
              <img src="img/user.png" alt="User Avatar" class="avatar">
              <div class="comment-details">
                <h4>Người Dùng456</h4>
                <p>Chất Vải Rất Đẹp</p>
                <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>

              </div>
            </div> -->
          </div>
    </div>
</section>