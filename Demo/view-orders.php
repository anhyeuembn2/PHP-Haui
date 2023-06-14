<?php 
 include "./db.php";
 $sql="select * from orders";
 $result=$connect->query($sql);
 $count=1;
?>


<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã Hàng</th>
            <th>Ngày đặt</th>
            <th>Giờ đặt</th>
            <th>Tổng tiền</th>
            <th>Hành động</th>

        </tr>
    </thead>
    <tbody>
        <?php  foreach($result as $item) : ?>
        <tr>
            <td><?=$count++?></td>
            <td><?=$item['id']?></td>
            <td><?=$item['orderDate']?></td>
            <td><?=$item['orderTime']?></td>
            <td><?=$item['sumPrice']?></td>
            <td><button><a href="orders_detail.php?id=<?=$item['id']?>">Xem Chi tiết đơn hàng</a></button></td>

        </tr>
        <?php endforeach;?>

    </tbody>

</table>


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