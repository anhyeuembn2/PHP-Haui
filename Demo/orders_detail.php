<?php
include "./db.php";

$items = array();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM orders_detail p INNER JOIN tblitems q ON p.itemId=q.id WHERE p.id=$id";
    $item = $connect->query($sql);
    $arr=mysqli_fetch_array($item);
    
    
    

    
}
?>

<div>


    <h1>Mã đơn hàng : <?= $arr['id'] ?></h1>
    <h2>Tên sản phẩm : <?= $arr['name'] ?></h2>
    <p>Số lượng : <?= $arr[2] ?></p>
    <p>Giá sản phảm : <?= $arr['price'] ?></p>


</div>