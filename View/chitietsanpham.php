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
                    <div class="total">
                        <!-- <h4>Thành Tiền:450000d</h4> -->
                        <div class="main-border-button">

                            <form action="index.php?act=addcart" class="themgiohang" method="post">
                                <input type="hidden" name="id" id="idsp" value="<?php echo $id_pro ?>">
                                <input type="hidden" name="name" value="<?php echo $name ?>">
                                <input type="hidden" name="img" value="<?php echo $img ?>">
                                <div class="quantity-content">
                                    <div class="left-content">
                                        <h6 style="padding-top: 0;">Chọn Màu</h6>
                                    </div>
                                    <div class="right-content">
                                        <select style="width: 50%; display: inline-block;" name="color" id="idcolor" class="form-select" aria-label="Default select example">
                                            <?php foreach ($spbt_color as $c) : ?>

                                                <option value="<?php echo $c['id_color'] ?>"> <?php echo $c['color'] ?></option>
                                            <?php endforeach ?>

                                        </select>

                                    </div>
                                </div>
                                <div class="quantity-content">
                                    <div class="left-content">
                                        <h6>Chọn Size</h6>
                                    </div>
                                    <div class="right-content">
                                        <select style="width: 50%; display: inline-block;" name="size" id="idsize" class="form-select">
                                            <?php foreach ($spbt_size as $s) : ?>
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
                                            <input style="text-align: center;width: 100px;" type="number" value="1" id="quantity" name="soluong" min="1">
                                        </div>
                                    </div>

                                </div>
                                <p><?php if (isset($_COOKIE['tbsl'])) {
                                        $tb_sl = $_COOKIE['tbsl'];
                                        echo $tb_sl;
                                    } else {
                                        echo $tb_sl = "";
                                    } ?></p>

                                <p><?php if (isset($_COOKIE['xinloi'])) {
                                        $xl = $_COOKIE['xinloi'];
                                        echo $xl;
                                    } else {
                                        echo $xl = "";
                                    } ?></p>

                                <input type="hidden" name="price" value="<?php echo $price - (($price * $discount) / 100) ?>">



                                <span id="soluongsp"></span>

                                <input style="padding: 5px;background: mediumvioletred;border: 1px solid #ccc;color: #fff;" type="submit" name="addcart" value="Thêm giỏ hàng">
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
                        if (isset($_SESSION['taikhoan'])) { ?>
                            <div class="search">
                                <form action="index.php?act=chitietsp&idsp=<?php echo $onesp['id_pro'] ?>" method="post">
                                    <input type="hidden" name="idpro" value="<?php echo $onesp['id_pro'] ?>">
                                    <div>


                                        <input style="padding: 5px;margin-bottom: 15px;width: 50%;" type="text" name="noidung" id="review">
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button style="padding: 5px 7px; background: black;margin-bottom: 20px;" type="submit" id="form-submit" class="main-dark-button" name="guibinhluan"><i style="color: #fff;" class="fa fa-paper-plane"></i></button>
                                            <fieldset>

                                    </div>


                                    <?php
                                    if (isset($_COOKIE['oke'])) {
                                        $camon = $_COOKIE['oke'];
                                        echo $camon;
                                    }

                                    // if(isset( $_SESSION['camon'])){
                                    //     echo  $_SESSION['camon'];
                                    // }else{
                                    //     setcookie("oke",$camon,time()-5);
                                    //       echo  $_SESSION['camon']="";
                                    // }
                                    if (isset($err['noidung'])) : ?>
                                        <span style="color: red;"><?php echo $err['noidung'] ?></span>
                                    <?php endif ?>

                                </form>
                            </div>
                        <?php } else { ?>
                            <p style="color: red; font-size: 15px;padding-left: 20px;"> <a style="color: red;" href="index.php?act=dangnhap">Vui lòng đăng nhập</a></p>
                        <?php } ?>
                    </div>

                </div>

            </div>
            <div class="container">
                <div class="input-comment">
                    <div class="search">

                        <div class="" style="margin-top: 0;">

                            <?php foreach ($binhluan as $bl) : ?>
                                <div style=" padding: 10px 15px;border: 1px solid #ccc;width: 96%;">
                                    <div style="display: flex;flex-direction: row;">
                                        <img src="upload/<?php echo !isset($bl['avata']) || empty($bl['avata']) ? 'anh (2).jpg' : $bl['avata'] ?>" alt="User Avatar" class="avatar">
                                        <h6 style="line-height: 50px;"><?php echo $bl['user'] ?></h6>
                                    </div>
                                    <p><?php echo $bl['noidung'] ?></p>
                                    <p style="font-size: 10px ;opacity: 0.5;"><?php echo  date("d/m/Y", strtotime($bl['ngaybl'])) ?></p>
                                </div>
                        

                    <?php endforeach ?>
                    </div>
                    </div>

                </div>
                <?php
                if ($binhluan) {
                    if (isset($_GET['full'])) { ?>
                        <a href="index.php?act=chitietsp&idsp=<?php echo $onesp['id_pro'] ?>"><img style="width: 20px;background-image: #ccc;opacity: 0.5;" src="upload/arrow-up.png" alt=""></a>
                    <?php } else { ?>
                        <a href="index.php?act=chitietsp&idsp=<?php echo $onesp['id_pro'] ?>&full"> <img style="width: 20px;background-image: #ccc;opacity: 0.5;" src="upload/down-filled-triangular-arrow.png" alt=""></a>
                <?php  }
                }

                ?>
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
                                    <?php foreach ($sp_cungloai as $sp) : ?>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="index.php?act=chitietsp&idsp=<?php echo $sp['id_pro'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <img src="upload/<?php echo $sp['img'] ?>" alt="">
                                            </div>
                                            <div class="down-content">
                                                <h4 style="text-align: center;"><?php echo $sp['name'] ?></h4>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
               <script >
                $(document).ready(function(){
                  $('#idcolor').change(function(){
                  var idcolor = $("#idcolor").val();
                  var idsp= $("#idsp").val();
                 
                  $.post("soluong.php", {idcolor:idcolor, idsp:idsp},function(data){
                 $("#soluongsp").html(data);
                  })
                 });
                });
                
               </script> -->