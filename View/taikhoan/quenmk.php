<style>
    .khung{
        margin-top: 200px;
    }
</style>
<div class="khung">
    <div class="login" id="login">
        
        <div class="form-container sign-in">
            <form action="index.php?act=quenmk" method="post">
                <h1 style="margin-bottom: 30px;">Quên mật khẩu</h1>
               
                <input type="email" name="email" placeholder="Email" required>
                <span style="color: red; font-size: 15px;">
                <?php if(isset($sendmailMess)&& $sendmailMess!=""){
                                echo  $sendmailMess;
                        }?>
            </span>
                <div class="chucnangcc" style="display: flex;
    place-self: flex-end;">
                <a  href="index.php?act=dangnhap">Đăng nhập</a>
                <span style="padding: 0 5px;line-height: 50px;">|</span>
                <!-- <button>Đăng Nhập</button> -->
                 <a href="index.php?act=dangky">Đăng ký</a>
                </div>
                
                <input type="submit" value="GỬI" name="guiemail">
                
            </form>
            
        </div>
         
    </div>
</div>

