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
function insert_dangky($email,$user,$pass){
  $sql="INSERT INTO taikhoan(email,user,pass) values ('$email','$user','$pass')";
  pdo_execute($sql);
  
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
  function check_user($email,$pass){
    $sql="SELECT * from taikhoan where email='$email' and pass='$pass'";
    $sp=pdo_query_one($sql);
    return $sp;
 }

 function update_tkView($id,$user,$email,$image,$diachi,$phone){
  $sql="UPDATE taikhoan SET user='$user',avata='$image',email='$email',address='$diachi',phone='$phone' WHERE id_user='$id'";
    pdo_execute($sql);
 }
 function update_pass($passnew,$id){
  $sql="UPDATE taikhoan SET pass='$passnew' WHERE id_user='$id'";
    pdo_execute($sql);
 }
 function check_email($email){
  $sql="SELECT * from taikhoan where email='$email'";
  $tk=pdo_query_one($sql);
 if($tk!=false){
  sendEmail($email,$tk['user'],$tk['pass']);
  return "Gửi email thành công";/* gan vao bien sendmailmess*/
 }else{
  return "Không tìm thấy email";
 }
}
function sendEmail($email,$username,$pass){
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  $mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
   //Server settings
   $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
   $mail->isSMTP();                                            //Send using SMTP
   $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
   $mail->Username   = '4a6fd64593e80e';                     //SMTP username
   $mail->Password   = '1730273a2ee53f';                               //SMTP password
   $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
   $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   //Recipients
   $mail->setFrom('duanmau@example.com', 'Admin');
   $mail->addAddress($email,$username);     //Add a recipient
   

  
   //Content
   $mail->isHTML(true);                                  //Set email format to HTML
   $mail->Subject = 'Nguoi dung quen mat khau';
   $mail->Body    = 'Mat khau cua ban la'.$pass;

   $mail->send();
   echo 'Message has been sent';
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>