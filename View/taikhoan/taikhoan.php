<div class="khung">
    <div class="login" id="login">
        <!-- <div class="form-container sign-up">
            <form method="post">
                <h1>Tạo Tài Khoản</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password">
                <button>Đăng Kí</button>
            </form>
        </div> -->
        <div class="form-container sign-in">
            <form method="post">
                <h1>Đăng Nhập</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="pass" placeholder="Password" required>
                <a href="#">Quên Mật Khẩu</a>
                <!-- <button>Đăng Nhập</button> -->

                <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
                <span style="color: red; font-size: 12px;">
                    <?php
                    if (isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    } else if (isset($err['err'])) {
                        echo $err['err'];
                    } else {
                        echo $err['err'] = "";
                    }
                    ?>
                </span>
            </form>
        </div>
        <!-- <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào Mừng</h1>
                    <button class="hidden" id="login">Đăng Nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Xin chào</h1>
                    <button class="hidden" id="register">Đăng Kí</button>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script> -->