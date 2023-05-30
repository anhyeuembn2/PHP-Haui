<?php 
 session_start();
 $cart=isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
 $sum=0;
 foreach($cart as $key=>$item){
    $sum+=$item['qty']*$item['price'];
 }
 $count=0;
 if(file_exists("donhang.txt")){
    $file=fopen("donhang.txt",'a');
    $count=count(file("donhang.txt"))+1;
 }else{
    $file=fopen("donhang.txt",'w');
 }
 $orderInfo = $count . "\t" . date('Y-m-d H:i:s') . "\t" . $sum . "\n";
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
        <?php foreach($cart as $key=>$item): ?>
        <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['qty']?></td>
            <td><?=$item['price']?></td>
            <td><?=$item['qty']*$item['price']?></td>

        </tr>
        <?php endforeach; ?>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="4">Tổng tiền :</td>
            <td><?=$sum?></td>
        </tr>
    </tfoot>

</table>
<button><a href="check-out.php">Đặt hàng</a></button>