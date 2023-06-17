<?php 
$servername="127.0.0.1:3307";
$username="root";
$password="";
$db="qlnv1";
$connnect=mysqli_connect($servername,$username,$password,$db);
if(!$connnect){
    echo "Lỗi kết nối" . mysqli_connect_error();
}
echo "Kết nối thành công";

?>