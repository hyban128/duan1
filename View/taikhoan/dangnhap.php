<div class="khung">
    <div class="login" id="login">
        
        <div class="form-container sign-in">
            <form method="post">
                <h1>Đăng Nhập</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="pass" placeholder="Password" required>
                <span style="color: red; font-size: 15px;">
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
                <div class="chucnangcc" style="display: flex;place-self: flex-end;">
                <a  href="index.php?act=quenmk">Quên Mật Khẩu</a>
                <span style="padding: 0 5px;line-height: 50px;">|</span>
                <!-- <button>Đăng Nhập</button> -->
                 <a href="index.php?act=dangky">Đăng ký</a>
                </div>
                
                <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
                
            </form>
        </div>
         
    </div>
</div>

