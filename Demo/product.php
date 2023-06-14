<?php 

 include "./db.php";
 $sql="select * from tblitems";
 $result=$connect->query($sql);
 $count=1;
?>


<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã Hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th width="400">Hinh Ảnh</th>
            <th>Chon mua</th>

        </tr>
    </thead>
    <tbody>
        <?php  foreach($result as $item) : ?>
        <tr>
            <td><?=$count++?></td>
            <td><?=$item['id']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['qty']?></td>
            <td><?=number_format($item['price'],0, '.', '.')?></td>
            <td>
                <img src="upload/<?=$item['image']?>" width="100" alt="">
            </td>
            <td>
                <a href="cart.php?id=<?=$item['id']?>"><button>Mua</button></a>
                <a href="delete.php?id=<?=$item['id']?>"><button>Xóa</button></a>
                <a href="updtae.php?id=<?=$item['id']?>"><button>Sửa</button></a>
            </td>
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