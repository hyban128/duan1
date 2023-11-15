<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PTAH SHOP</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="View/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="View/assets/css/font-awesome.css">

    <link rel="stylesheet" href="View/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="View/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="View/assets/css/lightbox.css">
   
    <script src="https://kit.fontawesome.com/e6c8e2293e.js" crossorigin="anonymous"></script>
    </head>
    
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
                                    <li><a href="index.php?act=dmsp">Áo Polo</a></li>
                                    <li><a href="index.php?act=dmsp">Áo Sơ Mi</a></li>
                                    <li><a href="index.php?act=dmsp">Áo Thun</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Trang</a>
                                <ul>
                                    <li><a href="index.php?act=gioithieu">Về Chúng Tôi</a></li>
                                    <li><a href="#">Sản phẩm</a></li>
                                    <li><a href="index.php?act=lienhe">Liên Hệ Chúng Tôi</a></li>
                                </ul>
                            </li>
                            <!-- <li class="scroll-to-section"><a href="#explore">Khám Phá</a></li> -->
                            <li><a href="#"><input type="text" class="seach"></a></li>
                            <li><a href="#" type="seach"><i class="fa-brands fa-searchengin"></i></a></li>
                            <li><a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="View/taikhoan/taikhoan.php"><i class="fa-solid fa-user"></i></a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="slide-show">
        <img class="slide current-slide" src="View/img/slide_1_img.webp" alt="Image 1">
        <img class="slide" src="View/img/slide_4_img.jpg" alt="Image 2">
    </div>
    <script>
        let currentSlideIndex = 0;
        let slides = document.getElementsByClassName('slide');

    setInterval(function () {
    slides[currentSlideIndex].classList.remove('current-slide');
    currentSlideIndex++;
    if (currentSlideIndex == slides.length) {
        currentSlideIndex = 0;
    }
    slides[currentSlideIndex].classList.add('current-slide');
    }, 3000); 

    </script>