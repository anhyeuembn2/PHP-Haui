<?php
include "./db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM nhanvien WHERE MaNV='$id'";
    $result = $connnect->query($sql);
    $arr = mysqli_fetch_array($result);
}

if(isset($_POST['btn'])){
    $id = $_POST['ids'];
    $hoTen = $_POST['name'];
    $xepLoai = $_POST['xepLoai'];
    $luongNgay = $_POST['luongNgay'];
    $ngayCong = $_POST['ngayCong'];
    $img = $_POST['img'];

    $image = $img; 

    if(isset($_FILES['file']['size']) && $_FILES['file']['size'] > 0){
        $file = $_FILES['file'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], "./upload/$file_name");
        $image = $file_name;
    }

    $sql1 = "UPDATE nhanvien SET HoTen='$hoTen', HinhAnh='$image', XepLoai='$xepLoai', LuongNgay=$luongNgay, NgayCong=$ngayCong WHERE MaNV='$id'";
    $result1 = $connnect->query($sql1);

    if($result1){
        echo "<script>alert('Update thành công')</script>";
    }
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
    <form action="update.php" method="post" enctype="multipart/form-data">
        <label for="name">Họ tên</label>
        <input type="text" name="name" value="<?= htmlspecialchars($arr['HoTen']) ?>"> <br>
        <input type="hidden" name="ids" value="<?= htmlspecialchars($arr['MaNV']) ?>">
        <label for="file">Hình ảnh</label>
        <input type="file" name="file">
        <?php if($arr['HinhAnh']): ?>
        <span><?= htmlspecialchars($arr['HinhAnh']) ?></span>
        <?php endif; ?> <br>
        <input type="hidden" name="img" value="<?= htmlspecialchars($arr['HinhAnh']) ?>">
        <label for="xepLoai">Xếp Loại</label>
        <input type="text" name="xepLoai" value="<?= htmlspecialchars($arr['XepLoai']) ?>"> <br>
        <label for="luongNgay">Lương Ngày</label>
        <input type="text" name="luongNgay" value="<?= htmlspecialchars($arr['LuongNgay']) ?>"><br>
        <label for="ngayCong">Ngày công</label>
        <input type="text" name="ngayCong" value="<?= htmlspecialchars($arr['NgayCong']) ?>"><br>
        <button type="submit" name="btn">Update</button>
    </form>
</body>

</html>