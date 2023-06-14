<?php 
include "./db.php";
session_start();
 $cart=!empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
    
 $sum=0;
 foreach($cart as $item){
    $sum+=$item['price']*$item['qty'];
 }
 if(isset($_POST['btn'])){
   
    $currentDay = date("Y-m-d");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $currentTime =date("H:i:s");
    $sql = "INSERT INTO orders (orderDate,orderTime, sumPrice) VALUES ('$currentDay','$currentTime', $sum)";
    $result = $connect->query($sql); // Use the correct variable name '$connect' instead of '$connnect'
    if($result){
        $order_id=mysqli_insert_id($connect);
        foreach($cart as $key=>$value){
            $sql1="insert into orders_detail(orders_id,itemId,qty,price) values($order_id,$value[id],$value[qty],$value[price])";
            $result1=$connect->query($sql1);
            
        }
        unset($_SESSION['cart']);
        echo "<script>alert('đặt hàng thành công')</script>";
        echo "<script>window.location.href='view-orders.php'</script>";
       
  }
 
 }
?>
<?php if(!empty($cart)): ?>
<form action="view-cart.php" method="post">
    <table>
        <thead>
            <tr>

                <th>Mã Hàng</th>
                <th>Tên hàng</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>

            </tr>
        </thead>
        <tbody>
            <?php  foreach($cart as $item) : ?>
            <tr>

                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['qty']?></td>
                <td><?=number_format($item['price'],0, '.', '.')?></td>
                <td>
                    <?=number_format($item['price']*$item['qty'],0, '.', '.')?>
                </td>

            </tr>
            <?php endforeach;?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Tồng tiền</td>
                <td><?=$sum?></td>
            </tr>
        </tfoot>
    </table>

    <button type="submit" name="btn">Đặt hàng</button>
</form>
<?php else : ?>
<h1>Giỏ hàng trống</h1>
<?php endif; ?>
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