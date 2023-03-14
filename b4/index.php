<?php 
 // lấy thông tin bên phía server
 // sử dụng biến toàn cục $_SERVER
 echo "<pre/>";
 print_r($_SERVER);
 // xử lý thời gian PHP
 /*
 1.Lấy ra ngày tháng hiện tain
 date()
2. set timezone
data_default_tiemzone_set("")





*/
$today=date('d-m-y H:i:s');
echo $today;



?>