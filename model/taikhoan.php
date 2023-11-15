<?php
function insert_taikhoan($email,$user,$pass){ 
    $sql="INSERT INTO taikhoan(email,name,pass) VALUES ('$email','$user','$pass')";
                pdo_execute($sql);
 }
function loadAll_taikhoan(){
    $sql="SELECT *FROM taikhoan order by id_user asc";
    $taikhoan=pdo_query($sql);
    return $taikhoan;
}
function loadOne_tk($id){/* Lay ra 1 ban ghi tu 1 id*/
    $sql="SELECT * from taikhoan where id_user='$id'";
    $tk=pdo_query_one($sql);
    return $tk;
  }
  function delete_tk($id){/*Xoa */
    $sql="DELETE from taikhoan where id_user='$id'";
     pdo_execute($sql);
  }
  function update_taikhoan($id,$user,$pass,$email,$avata,$address,$phone,$role) {
    $sql="UPDATE taikhoan SET user='$user',pass='$pass',email='$email',avata='$avata',address='$address',phone='$phone',role='$role' where id_user='$id'";
    pdo_execute($sql);
    header("location:".$_SERVER['HTTP_REFERER']);
  
  }
?>