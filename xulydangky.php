<?php 
require "connet.php";
$error_khoangtrong="";
$error_xacnhanmatkhau ="";


$username=trim($_POST['username']);
$gmail =trim($_POST['gmail']);
$matkhau = trim($_POST['matkhau']);
$confirmpassword = trim($_POST['confirm--password']);
if(empty($username)|| empty($gmail)|| empty($matkhau)|| empty($confirmpassword)){
    $error_khoangtrong = "các ký tự phải được viết liền";
}elseif($matkhau !== $confirmpassword){
    $error_xacnhanmatkhau = "mật khẩu xác nhận không giống";
}else{
    $sql = "INSERT INTO user (username,password,gmail) values('$username','$matkhau','$gmail') ";
    if($conn ->query($sql)===TRUE){
        echo"đăng ký thành công";
    }else{
        echo "thất bại";
    }
}

?>