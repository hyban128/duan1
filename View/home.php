<style>
    .banner-extra {
        display: flex;
        justify-content: center;
        padding-top: 40px;
    }

    .block-extra {
        display: inline-flex;
        align-items: center;
        padding: 10px 15px;
    }

    .block-extra .icon {
        font-size: 50px;
        margin: 20px;
        color: cadetblue;
    }

    .block-extra .title-banner {
        font-size: 14px;
        font-weight: 600;
    }

    .an {
        display: block;
        display: -webkit-box;
        height: 16px*1.3*3;
        font-size: 16px;
        line-height: 1.3;
        -webkit-line-clamp: 3;
        /* số dòng hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 10px;
    }
</style>
<div class="slide-show">
    <img class="slide current-slide" src="upload/slide_1_img.webp" alt="Image 1">
    <img class="slide" src="upload/slide_4_img.jpg" alt="Image 2">
</div>

<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Sản phẩm mới</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        <?php
                        foreach ($spnew as $sp) : ?>
                            <div style="width: auto;height: auto;" class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="index.php?act=chitietsp&idsp=<?php echo $sp['id_pro'] ?>"><i style="line-height: 50px; background-color: red;padding: 0 15px;" class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="upload/<?php echo $sp['img'] ?>" alt="">
                                </div>
                                <div class="down-content" style="text-align: center;">
                                    <h4><?php echo $sp['name'] ?></h4>
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



                                    <!-- <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> -->
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content" style="padding-top: 55px;">
                    <h2>Khám phá sản phẩm của chúng tôi</h2>
                    <div class="main-border-button">
                        <a href="index.php?act=sanpham">Khám Phá Nhiều Hơn</a>
                    </div>
                </div>

            </div>
            <img style="width: 50%;" src="upload/banner.png" alt="">



            <section class="section" id="men">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <h2>Tin tức</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="men-item-carousel">
                                <div class="owl-men-item owl-carousel">
                                    <?php

                                    foreach ($blog as $bg) : ?>

                                        <div class="card" style="width: 18rem;">
                                            <img src="upload/<?php echo $bg['img'] ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $bg['title'] ?></h5>

                                                <details>
                                                    <div>
                                                        <p class="card-text"><?php echo $bg['noidung'] ?></p>

                                                    </div>

                                                </details>


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

    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Bằng cách đăng ký nhận bản tin của chúng tôi, bạn có thể được giảm giá 30%</h2>
                        <span>Chi tiết đến từng chi tiết là điều khiến PTAH Shop khác biệt so với các chủ đề khác.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Địa điểm cửa hàng:<br><span>Số 1 Trịnh Văn Bô Nam Từ Niêm Hà Nội</span></li>
                                <li>Số Điện Thoại:<br><span>0123456789</span></li>
                                <li>Cao Đẳng FPT:<br><span>Tòa L Trường Cao Đẳng FPT</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Giờ làm Việc:<br><span>07:30 Sáng - 9:30 Tối Hằng Ngày</span></li>
                                <li>Email:<br><span>info@fpt.edu.vn</span></li>
                                <li>Mạng Xã Hội:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner-extra">
    <div class="block-extra" style="border: 1px solid #ccc;">
        <div class="icon">
            <i class="fa-solid fa-medal" style="color: #2ba81a;"></i>

        </div>
        <div class="title-banner">
            <p>Sản Phẩm Chính Hãng</p>
        </div>
    </div>
    <div class="block-extra" style="border: 1px solid #ccc;">
        <div class="icon">
            <i class="fa-solid fa-truck-fast" style="color: #2ba81a;"></i>
        </div>
        <div class="title-banner">
            <p>Miễn Phí Vận Chuyển </p>
        </div>
    </div>
    <div class="block-extra" style="border: 1px solid #ccc;">
        <div class="icon">
            <i class="fa-solid fa-headset" style="color: #2ba81a;"></i>
        </div>
        <div class="title-banner">
            <p>Hotline hỗ trợ 24/7</p>
        </div>
    </div>
    <div class="block-extra" style="border: 1px solid #ccc;">
        <div class="icon">
            <i class="fa-solid fa-repeat" style="color: #2ba81a;"></i>
        </div>
        <div class="title-banner">
            <p>Thủ Tục Đổi Trả Dễ Dàng</p>
        </div>
    </div>
</section>