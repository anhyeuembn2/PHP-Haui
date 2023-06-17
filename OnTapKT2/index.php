<?php 
  include "./db.php";
  $sql="select * from nhanvien";
  $kq=$connect->query($sql);
  $count=1;
  if(isset($_POST['btn'])){
  
    $id=$_POST['maNV'];
   
    $sql="select * from nhanvien where MaNV LIKE '%$id%'";
    $kq=$connect->query($sql);
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
        <input type="text" name="maNV">
        <button type="submit" name="btn">Tìm kiếm</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã nhân viên</th>
                <th>Họ tên</th>
                <th>Hỉnh ảnh</th>
                <th>Xếp loại</th>
                <th>Lương ngày</th>
                <th>Ngày công</th>
                <th>Tông lương</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kq as $item): ?>
            <?php 
                 $xepLoai=$item['XepLoai'];
                 $thuong=0;
                 if(strcmp($xepLoai,"A")==0){
                    $thuong=500000;
                 }else if(strcmp($xepLoai,"B")==0){
                    $thuong=300000;
                 }else{
                    $thuong=0;
                 }
                 $tongtien=($item['LuongNgay']*$item['NgayCong'])+$thuong;
                 
            ?>
            <tr>
                <td><?=$count++?></td>
                <td><?=$item['MaNV']?></td>
                <td><?=$item['HoTen']?></td>
                <td>
                    <img width="100" src="./upload/<?=$item['HinhAnh']?>" alt="">
                </td>
                <td><?=$item['XepLoai']?></td>
                <td>
                    <?=$item['LuongNgay']?>
                </td>
                <td><?=$item['NgayCong']?></td>
                <td><?=$thuong?></td>
                <td>
                    <button><a href="add.php">Thêm</a></button>
                    <button><a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"
                            href="remove.php?id=<?=$item['MaNV']?>">xóa</a></button>
                    <button><a href="update.php?id=<?=$item['MaNV']?>">Sửa</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>