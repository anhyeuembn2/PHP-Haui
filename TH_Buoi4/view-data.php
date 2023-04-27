<?php 
session_start();

// Kiểm tra giỏ hàng đã được lưu trong session chưa
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Tính tổng tiền của giỏ hàng
$total = 0;
foreach ($cart as $item) {
    $total += $item['qty'] * $item['price'];
}

$count = 0;
if (file_exists('donhang.txt')) {
    $file = fopen('donhang.txt', 'a');
    $count = count(file('donhang.txt')) + 1;
} else {
    $file = fopen('donhang.txt', 'w');
}


// Lưu thông tin đơn hàng mới vào file donhang.txt
$orderInfo = $count . "\t" . date('Y-m-d H:i:s') . "\t" . $total . "\n";
fwrite($file, $orderInfo);

// Lưu chi tiết đơn hàng vào file chitietdonhang.txt
if (file_exists('chitietdonhang.txt')) {
    $file1 = fopen('chitietdonhang.txt', 'a');
} else {
    $file1 = fopen('chitietdonhang.txt', 'w');
}

foreach ($cart as $item) {
    $line =$item['id'] . "\t" . $item['name'] . "\t" . $item['qty'] . "\t" . $item['price'] . "\n";
    fwrite($file1, $line);
}
fclose($file1);
fclose($file);

// Xóa giỏ hàng sau khi đặt hàng thành công
unset($_SESSION['cart']);


// Chuyển hướng về trang chủ
header('Location: index.php');
exit;


?>
<table>
    <thead>
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cart as $key => $value) : ?>
        <?php $count++?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['qty'] ?></td>
            <td><?= $value['price'] ?></td>
            <td><?= $value['qty'] * $value['price'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">Tổng tiền :</td>
            <td><?=$total?></td>
        </tr>
    </tfoot>
</table>
<button><a href="check-out.php">Đặt hàng</a></button>
<style>
table {
    border-collapse: collapse;
    border: 1px solid black;
    /* Thêm style border cho table */
    width: 100%;
    /* Đặt chiều rộng của bảng là 100% */
}

th,
td {
    border: 1px solid black;
    /* Thêm style border cho th, td */
    padding: 10px;
    /* Thêm khoảng cách giữa nội dung và đường viền của các ô */
    text-align: center;
    /* Căn giữa nội dung trong các ô */
    /*  tenmang as tenbine*/
}
</style>