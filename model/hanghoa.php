<?php
function insert_hanghoa($name,$gia,$giamgia,$image,$motasp,$iddm){
    $sql="INSERT INTO sanpham(name,price,discount,img,mota,iddm) VALUES ('$name','$gia','$giamgia','$image','$motasp','$iddm')";
    pdo_execute($sql);
    
}
function loadAll_sanpham($kyw="",$iddm=0){ /*Danh sach*/
    $sql="SELECT *from sanpham where 1";
    if($kyw!=""){ 
        $sql.=" and name like '%".$kyw."%'"; /*nếu từ nhập vào khách rỗng thì xem ... giống nó ko */
    }

    if($iddm>0){
   $sql.=" and iddm='".$iddm."'"; 
    }
    $sql.=" order by id_pro desc";
     $sanpham=pdo_query($sql);
     return $sanpham;
 }
 function   delete_hanghoa($id){
    $sanpham=loadOne_sanpham($id);
    if($sanpham['img']!=null && $sanpham['img']!=""){
      $hinh="../upload/".$sanpham['img'];
      unlink($hinh);
    }
    $sql="DELETE from sanpham where id_pro='$id' ";
     pdo_execute($sql);
 }
 function loadOne_sanpham($id){/* Lay ra 1 ban ghi tu 1 id*/
    $sql="SELECT * from sanpham where id_pro='$id'";
    $sp=pdo_query_one($sql);
    return $sp;
 }
 function update_hanghoa($id,$iddm,$tensp,$giasp,$motasp,$image){
         
        if($image!=null){
           
            $sql="UPDATE sanpham SET iddm='$iddm',name='$tensp',price='$giasp',img='$image',mota='$motasp' where id_pro='$id'";
            
           
        }      else{
            $sql="UPDATE sanpham SET iddm='$iddm',name='$tensp',price='$giasp',mota='$motasp' where id_pro='$id'";
    
        }      
        pdo_execute($sql);
      
       //   if($hinh!=""){
       //             $sql="UPDATE sanpham SET iddm='$iddm',name='$tensp',price='$giasp',img='$hinh',mota='$motasp' where id='$id'";
    
       //   }     else{
       //      $sql="UPDATE sanpham SET iddm='$iddm',name='$tensp',price='$giasp',mota='$motasp' where id='$id'";
    
       //   }    
        //  pdo_execute($sql);   
                
 }

?>