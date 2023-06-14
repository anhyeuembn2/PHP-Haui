<?php 
$servername="127.0.0.1:3307";
$username="root";
$password="";
$db="kt3";
$connect=mysqli_connect($servername,$username,$password,$db);
if(!$connect){
    die("lỗi".mysqli_connect_error());
}else{
    echo "Thanh cong";
}
?>