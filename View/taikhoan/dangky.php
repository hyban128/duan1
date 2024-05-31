<style>
    .khung{
        margin-top: 200px;
    }
</style>
<div class="khung">
    <div class="login" id="login">
        
        <div class="form-container sign-in">
            <form method="post" class="form mx-auto w-50 border 1 p-2 ">
                <h1 class="text-center">Đăng Ký</h1>
                <div class="social-icons text-center">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên khách hàng</label>
                    <input type="text" class="form-control" name="user" id="" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
                    <input type="text" class="form-control" name="pass" id="" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nhập lại mật khẩu</label>
                    <input type="text" class="form-control" name="passlai" id="" placeholder="" required>
                </div>
                <!-- <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="user" placeholder="Tên khách hàng" required> -->
                <!-- <input type="password" name="pass" placeholder="Mật khẩu" required>
                <input type="password" name="passlai" placeholder="Nhập lại mật khẩu" required> -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="không bắt buộc" >
                </div>

                <!-- <input type="text" name="address" placeholder="Địa chỉ(không bắt buộc)" > -->
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
                <div class="text-center">
                <input type="submit" class="btn btn-danger" value="ĐĂNG KÝ" name="dangky">

                </div>
                
            </form>
           
        </div>
         
    </div>
</div>

