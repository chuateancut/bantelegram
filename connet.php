<?php 
$sever='localhost';
$username ='root';
$password='';
$database = 'telegram';
$conn = new mysqli($sever,$username,$password,$database);
if($conn -> connect_error){
    die("ket noi that bai" . $conn ->connect_errno);
}else{
    echo"thành công"  ;
}
?>