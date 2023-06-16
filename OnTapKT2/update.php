<?php 
  include "./db.php";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from nhanvien where MaNV='$id'";
    $kq=$connect->query($sql);
    $arr=mysqli_fetch_array($kq);
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
    <form action="save.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?=$arr['MaNV']?>">
        <label for="">Họ tên</label>
        <input type="text" name="name" value="<?=$arr['HoTen']?>"> <br>
        <label for="">Hình ảnh</label>
        <input type="file" name="file"> <br>
        <?php if(isset($arr['HinhAnh'])): ?>
        <p><?=$arr['HinhAnh']?></p>
        <?php endif; ?>
        <label for="">Xếp loại</label>
        <input type="text" name="xepLoai" value="<?=$arr['XepLoai']?>"> <br>
        <label for="">Lương ngày</label>
        <input type="text" name="luongNgay" value="<?=$arr['LuongNgay']?>"> <br>
        <label for="">NgayCong</label>
        <input type="text" name="ngayCong" value="<?=$arr['NgayCong']?>"> <br>
        <button type=" submit" name="btn">Sửa</button>
    </form>
</body>

</html>