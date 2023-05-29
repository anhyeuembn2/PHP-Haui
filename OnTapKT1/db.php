<?php 
$servername="127.0.0.1:3307";
$username="root";
$password="";
$db="kt1";
$connect=mysqli_connect($servername,$username,$password,$db);

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error()); // giúp fix bug
}else{
    echo "Connect is successfully";
}
?>