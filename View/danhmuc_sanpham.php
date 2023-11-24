<style>
    .menu ul {
        /* background: #8AD385; */
        width: 150px;
        padding: 0;
        list-style-type: none;
        text-align: left;
    }

    .menu li {
        width: auto;
        /* height: 40px; */
        line-height: 40px;
        border: 1px solid #e8e8e8;
        padding: 0 10px;
    }

    .menu li a {
        text-decoration: none;
        color: #333;
        font-weight: 400;
        display: block;
    }

    /* .sub-doc{
    float: left;
  } */
    .menu ul li {
        position: relative;
    }



    .menu .sub-menu {
        position: absolute;
        left: 2px;
        top: 20;
        display: none;
    }
    .menu .sub-menu li{
width: 150px;
    }
    .menu li:hover .sub-menu {
        display: block;
    }
</style>
<section class="section" id="products">
    <div class="container">

        <div class="row">

            <div class="col-lg-12" >
                <!-- <?php echo $ten ?> -->
                <?php
                if (isset($_POST['kyw']) && $_POST['kyw'] != "") { ?>
                    <?php
                    $a =   $_POST['kyw'];
                    ?>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Cửa Hàng</a></li>
                        <li class="breadcrumb-item "><a href="index.php?act=sanpham">Sản phẩm</a></li>
                        <li class="breadcrumb-item active">Tìm kiếm</li>

                    </ul>
                    <h3 style="margin-bottom: 20px;">Kết quả tìm kiếm với từ khóa ''<?php echo $a ?>''</h3>
                <?php } else { ?>
                    <div class="section-heading">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Cửa Hàng</a></li>
                            <li class="breadcrumb-item "><a href="index.php?act=sanpham">Sản phẩm</a></li>
                            <li class="breadcrumb-item active"><?php echo $ten ?></li>

                        </ul>
                        <h2>Sản phẩm</h2>
                       
                    </div>
                    </li>
                    <li>

                        <form action="index.php?act=sanpham" method="post">
                            <input style="line-height: 30px; border: 1px solid #bbb;float: right; overflow: hidden;border-radius: 5px;opacity: 0.6;margin-bottom: -27px;" type="text" name="kyw" placeholder="Tìm kiếm tại đây..........">
                        </form>
                    </li>

            </div>
            <li>
                            <div class="menu">

                                <ul>

                                    <li>
                                        <h6 style="text-align: center;font-weight: 700;">
                                         Lọc <i class="fa-solid fa-angle-down" style="color: #050c1a;"></i></h6>

                                        <ul class="sub-menu">
                                        <li><a href="index.php?act=sanpham">Tất cả</a></li>

                                            <li><a href="index.php?act=tren300">Trên 300</a></li>
                                            <li><a href="index.php?act=100den200">Từ 100 đến 200</a></li>

                                            <li><a href="index.php?act=duoi100">Dưới 100</a></li>
                                        </ul>
                                    </li>
                                </ul>

                        </li>
        <?php }
        ?>

        </div>
    </div>
    </div>
    <div class="container" style="margin-top: 160px;">
        <div class="row">

            <?php
            foreach ($ds_sanpham as $sp) : ?>
                <div class="col-lg-4">

                    <div class="item">

                        <div class="thumb">


                            <div class="hover-content">

                                <ul>
                                    <li><a href="index.php?act=chitietsp&idsp=<?php echo $sp['id_pro'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
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


                </div>
            <?php endforeach ?>
        </div>
    </div>



</section>