<?php 
 include "./db.php";
 $sql="select * from nhanvien";
 $kq=$connnect->query($sql);
 $count=1;
 if(isset($_POST['btn'])){
    $maNV=$_POST['id'];
    $sql="select * from nhanvien where MaNV like '%$maNV%'";
    $kq=$connnect->query($sql);
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="text" name="id">
        <button type="submit" name="btn">Tìm kiếm</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã NV</th>
                <th>Họ Tên</th>
                <th>Hình Ảnh</th>
                <th>Xếp Loại</th>
                <th>Lương Ngày</th>
                <th>Ngày Công</th>
                <th>Tổng Tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kq as $item): ?>

            <?php
                  $thuong=0;
                  $xepLoai=$item['XepLoai'];
                  if(strcmp($xepLoai,"A")==0){
                    $thuong=500000;
                  }else if(strcmp($xepLoai,"B")==0){
                    $thuong=300000;
                  }else{
                      $thuong=0;
                  }
                    
                  $tongTien=($item['LuongNgay']*$item['NgayCong'])+$thuong;
                ?>
            <tr>
                <td><?=$count++?></td>
                <td><?=$item['MaNV']?></td>
                <td><?php echo $item['HoTen'] ?></td>
                <td>
                    <img width="100" src="./upload/<?=$item['HinhAnh']?>" alt="">
                </td>
                <td><?=$item['XepLoai']?></td>
                <td><?=$item['LuongNgay']?></td>
                <td><?=$item['NgayCong']?></td>
                <td><?=$tongTien?></td>
                <td>
                    <button><a href="add.php">Thêm</a></button>
                    <button><a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')"
                            href="remove.php?id=<?=$item['MaNV']?>">Xóa</a></button>
                    <button><a href="update.php?id=<?=$item['MaNV']?>">Sửa</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>