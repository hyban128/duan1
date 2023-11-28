<?php
function  insert_blog($id,$image,$title,$noidung,$ngaydang){ 
    $sql="INSERT INTO blog(id_user,img,title,noidung,ngaydang) VALUES ('$id','$image','$title','$noidung','$ngaydang')";
         pdo_execute($sql);
 }
  function loadall_blog(){
    $sql="SELECT taikhoan.user,blog.id_blog,blog.img,blog.title,blog.noidung,blog.ngaydang FROM blog join taikhoan on blog.id_user=taikhoan.id_user";
    $blog= pdo_query($sql);
    return $blog;
  }
  function load_blog(){
    $sql="SELECT *from blog order by id_blog desc";
    $blog= pdo_query($sql);
    return $blog;
  }
  function loadone_blog($id){
    $sql="SELECT * from blog where id_blog='$id'";
    $oneblog=pdo_query_one($sql);
    return $oneblog;
  
}

function  update_blog($id,$image,$tieude,$noidung,$ngaysua){
    if($image!=null){
           
        $sql="UPDATE blog SET img='$image',title='$tieude',noidung='$noidung',ngaydang='$ngaysua' where id_blog='$id'";
        
       
    }      else{
        $sql="UPDATE blog SET title='$tieude',noidung='$noidung',ngaydang='$ngaysua' where id_blog='$id'";

    }      
    pdo_execute($sql);
}
function  delete_blog($id){
    $sql="DELETE  FROM blog where id_blog='$id'";
    pdo_execute($sql);
}

?>