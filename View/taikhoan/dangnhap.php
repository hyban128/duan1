<style>
    .khung {
        margin-top: 200px;
    }
</style>
<div class="khung">
    <div class="login" id="login">

        <div class="form-container sign-in">
            <form method="post" class="form mx-auto w-50 border 1 p-2 ">
                <h1 class="text-center ">Đăng Nhập</h1>
                <div class="social-icons text-center">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="exampleFormControlInput1" placeholder="********" required>
                </div>
                <!-- <input type="email" name="email" placeholder="Email" required> -->
                <!-- <input type="password" name="pass" placeholder="Password" required> -->
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
                <div class="text-end">
                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                    <span style="padding: 0 5px;line-height: 50px;">|</span>
                    <!-- <button>Đăng Nhập</button> -->
                    <a href="index.php?act=dangky">Đăng ký</a>
                </div>
                    <div class="text-center ">
                    <input type="submit" class="btn btn-primary" value="ĐĂNG NHẬP" name="dangnhap">

                    </div>

            </form>
        </div>

    </div>
</div>