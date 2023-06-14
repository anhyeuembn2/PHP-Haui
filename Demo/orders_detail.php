<?php
include "./db.php";

$items = array();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM orders_detail p INNER JOIN tblitems q ON p.itemId=q.id WHERE p.orders_id=$id";
    $kq = $connect->query($sql);
    $arr = mysqli_fetch_array($kq);
    
    if ($arr) {
        ?>
<div>
    <h1>Mã đơn hàng: <?= $arr['id'] ?></h1>
    <h2>Tên sản phẩm: <?= $arr['name'] ?></h2>
    <p>Số lượng: <?= $arr[2] ?></p>
    <p>Giá sản phẩm: <?= $arr['price'] ?></p>
</div>
<?php
    } else {
        echo "Không tìm thấy đơn hàng có ID: $id";
    }
}



?>