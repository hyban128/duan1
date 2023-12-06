<div class="khung">
    <div class="login" id="login">
        
        <div class="form-container sign-in">
            <form method="post">
                <h1>Đăng Ký</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="user" placeholder="Tên khách hàng" required>
                <input type="password" name="pass" placeholder="Mật khẩu" required>
                <input type="password" name="passlai" placeholder="Nhập lại mật khẩu" required>
                

                <input type="text" name="address" placeholder="Địa chỉ(không bắt buộc)" >
                <span style="color: red;"> <?php
             if(isset($_COOKIE['dangky'])){
                echo $_COOKIE['dangky'];
             }else if(isset($err['pass'])){
                echo $err['pass'];
             }else if(isset($err['email'])){
                echo $err['email'];
             }else if(isset($err['passlai'])){
                echo $err['passlai'];

             
             }else{
                echo $_COOKIE['dangky']="";

             }
            ?></span>
            
                <!-- <input type="password" name="passlai" placeholder="Nhập lại mật khẩu" required> -->
                <input type="submit" value="ĐĂNG KÝ" name="dangky">
                
            </form>
           
        </div>
         
    </div>
</div>

