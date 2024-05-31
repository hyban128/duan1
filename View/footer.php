<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="upload/logo.png"alt="PTAH SHOP">
                        </div>
                        <ul>
                            <li><a href="#">Số 1 Trịnh Văn Bô Nam Từ Niêm Hà Nội</a></li>
                            <li><a href="#">info@fpt.edu.vn</a></li>
                            <li><a href="#">0123456789</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Mua sắm &amp; Danh mục</h4>
                    <ul>
                        <li><a href="#">Áo Polo</a></li>
                        <li><a href="#">Áo Sơ Mi</a></li>
                        <li><a href="#">Áo Thun</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="about.html">Về Chúng Tôi</a></li>
                        <li><a href="contact.html">Liên Hệ Chúng Tôi</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Trợ giúp &amp; Thông tin</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                        <li><a href="#">Giao Hàng</a></li>
                        <li><a href="#">ID Theo Dõi</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2023 Co., Ltd. All Rights Reserved. 
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="View/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="View/assets/js/popper.js"></script>
    <script src="View/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="View/assets/js/owl-carousel.js"></script>
    <script src="View/assets/js/accordions.js"></script>
    <script src="View/assets/js/datepicker.js"></script>
    <script src="View/assets/js/scrollreveal.min.js"></script>
    <script src="View/assets/js/waypoints.min.js"></script>
    <script src="View/assets/js/jquery.counterup.min.js"></script>
    <script src="View/assets/js/imgfix.min.js"></script> 
    <script src="View/assets/js/slick.js"></script> 
    <script src="View/assets/js/lightbox.js"></script> 
    <script src="View/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="View/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
      
        let currentSlideIndex = 0;
        let slides = document.getElementsByClassName('slide');

        setInterval(function() {
            slides[currentSlideIndex].classList.remove('current-slide');
            currentSlideIndex++;
            if (currentSlideIndex == slides.length) {
                currentSlideIndex = 0;
            }
            slides[currentSlideIndex].classList.add('current-slide');
        }, 3000);
        
        
    function init_reload(){
        setInterval( function() {
                   window.location.reload();
 
          },0);
    }
    
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>