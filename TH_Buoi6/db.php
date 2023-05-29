<?php 
$servername="127.0.0.1:3307";
$username="root";
$password="";
$db="cart";
$connect=mysqli_connect($servername,$username,$password,$db,);
if(!$connect){
    die("Connect Fail" . mysqli_connect_error());
}else{
    echo "Connect SuccessFully";
}

?>