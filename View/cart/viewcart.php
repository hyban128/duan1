<div class="title-box">
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Giỏ Hàng</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Cửa Hàng</a></li>
                        <li class="breadcrumb-item active">Giỏ Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá Tiền</th>
                                    <th>Số Lượng </th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Tổng Tiền</th>
                                    <th>Hành động</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                             
                                $tong=0;
                                $i=0; /*Xoa theo vi tri */
                                foreach ($_SESSION['cart'] as $cart){
                                           
                                        //    $tongtien=$cart[3]*$cart[4];
                                            $tong+=$cart[3]*$cart[4];
                                            
                               echo'  <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img style="width: 50px;" class="img-fluid" src="upload/'.$cart['2'].'" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        '.$cart[1].'
                                    </td>
                                    <td class="price-pr">
                                        <p>'.$cart['3'].'</p>
                                    </td>
                                    <form action="?act=addcart" method="post">
                                    <td style="width:130px">
                                    <input style="text-align: center;  width: 30%; background: antiquewhite;border: 1px solid #ccc;" type="number" min="1" name="slcn" value="'.$cart['4'].'">
                                    <input type="hidden" value="'.$cart[0].'" name="idsp">
                                    <input type="hidden" value="'.$cart[5].'" name="idcolor">
                                    <input type="hidden" value="'.$cart[6].'" name="idsize">
                                    </td>
                                    <td>
                                    <p>'.($cart['6']==3?'M':'S').'</p>
                                  </td>
                                  <td>
                                    <p>'.($cart['5']==3?'Trắng':'Đen').'</p>
                                  </td>
                                    <td class="total-pr">
                                        <p>'.$cart['4']*$cart['3'].'</p>
                                    </td>
                                  
                                    <td class="remove-pr">
                                        <a href="index.php?act=deletecart&idcart='.$i.'">
                                            <i class="fas fa-times"><input type="button"></i>
                                        </a>
                                        <button style="border:none" name="btn-sb"><i class="fa-regular fa-pen-to-square" style="color: #5b8ce1;"></i></button>
                                    </td>
                                    </form>
                                </tr>
                                <tr>';
                                $i+=1;
                            }
                                       echo' <td style="background-color: #ccc;" colspan="6">Tổng tiền</td>
                                        <td style="font-weight: 800;background-color:#ccc" class="total-pr">
                                            <p>'.$tong.'</p>
                                        </td>
                                    
                                     <td style="background-color: #ccc;">
                                     <a  href="index.php?act=bill"><input style="background: blue; border: none;padding: 0 5px;   color: orange; font-weight: 800;" value="Tiếp tục" name="tt" type="submit"></a> 

                                     </td>
                        
                                    </tr>';
                                    ?>

                            </tbody>
                        </table>
                        <?php
                 if(isset($_SESSION['soluongadd'])){
                    echo $_SESSION['soluongadd'];
                 }else{
                    echo $_SESSION['soluongadd']="";
                 }
                        ?>
<?php
if(!isset($_SESSION['taikhoan'])){?>
    <span style="color: red;"><?php echo $_SESSION['thongbao'] ?></span>
<?php }else{?>
    <?php $_SESSION['thongbao']=""?>
<?php }?>

                    </div>
                   
                    <?php
                    
     if(!$_SESSION['cart']){
    echo'<h4 style="color:red;">Không có sản phẩm nào trong giỏ hàng quay lại để mua</h4>';
    }


?>

                </div>
            </div>

        </div>
    </div>
</div>
