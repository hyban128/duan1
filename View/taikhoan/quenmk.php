<style>
    .khung {
        margin-top: 200px;
    }
</style>
<div class="khung">
    <div class="login" id="login">
        
        <div class="form-container sign-in">
            <form action="index.php?act=quenmk" method="post" class="form mx-auto w-50 border 1 p-2 ">
                <h1 class="mb-4 text-center">Quên mật khẩu</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                </div>
                <!-- <input type="email" name="email" placeholder="Email" required> -->
                <span style="color: red; font-size: 15px;">
                <?php if(isset($sendmailMess)&& $sendmailMess!=""){
                                echo  $sendmailMess;
                        }?>
            </span>
                <div class="text-end" >
                <a  href="index.php?act=dangnhap">Đăng nhập</a>
                <span style="padding: 0 5px;line-height: 50px;">|</span>
                <!-- <button>Đăng Nhập</button> -->
                 <a href="index.php?act=dangky">Đăng ký</a>
                </div>
                <div class="text-center">
                <input type="submit" class="btn btn-success" value="GỬI" name="guiemail">

                </div>
                
            </form>
            
        </div>
         
    </div>
</div>

