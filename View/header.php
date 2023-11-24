<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="icons/themify-icons-font/themify-icons/themify-icons.css">
    <title>PTAH SHOP</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="View/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="View/assets/css/font-awesome.css">

    <link rel="stylesheet" href="View/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="View/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="View/assets/css/lightbox.css">
    <link rel="stylesheet" href="View/assets/css/pay.css">

    <script src="https://kit.fontawesome.com/e6c8e2293e.js" crossorigin="anonymous"></script>
    
<body>


    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="View/img/logo-removebg-preview.png" width="150px" height="150px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Trang Chủ</a></li>
                            <li class="submenu">
                                <a href="#men">Men's</a>
                                <ul>
                                    <?php 
                                    foreach($danhmuc as $dm):?>
                                    <li><a href="index.php?act=sanpham&iddm=<?php echo $dm['id_dm']?>"><?php echo $dm['name']?></a></li>
                                   <?php endforeach?>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Trang</a>
                                <ul>
                                    <li><a href="index.php?act=gioithieu">Về Chúng Tôi</a></li>
                                    <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                                    <li><a href="index.php?act=lienhe">Liên Hệ Chúng Tôi</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="index.php?act=giohang"><i style="line-height: 40px;" class="fa-solid fa-cart-shopping"></i></a></li>
                            <?php
                                if(isset($_SESSION['taikhoan'])){?>
                                                <li><a href="index.php?act=thongtin"><?php echo $_SESSION['taikhoan']['user']?></a></li>
                                <?php }else{?>
                                    <li><a href="index.php?act=dangnhap"><i style="line-height: 40px;" class="fa-solid fa-user"></i></a></li>

                                <?php }?>
                            
                        </ul>        

                    </nav>
                </div>
            </div>
        </div>
    </header>
   
