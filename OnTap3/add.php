<?php 
 include "./db.php";
 if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $hoTen=$_POST['name'];
    $xepLoai=$_POST['xepLoai'];
    $luongNgay=$_POST['luongNgay'];
    $ngayCong=$_POST['ngayCong'];
    $file_name="";
    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"./upload/$file_name");
       
    }
    $sql="insert into nhanvien(MaNV,HoTen,HinhAnh,XepLoai,LuongNgay,NgayCong) values('$id','$hoTen','$file_name','$xepLoai',$luongNgay,$ngayCong)";
    $kq=$connnect->query($sql);
    if($kq){
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href='index.php'</script>";
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
    <form action="add.php" method="post" enctype="multipart/form-data">
        <label for="">Mã NV</label>
        <input type="text" name="id"> <br>
        <label for="">Họ tên</label>
        <input type="text" name="name"> <br>
        <label for="">Hình ảnh</label>
        <input type="file" name="file"> <br>
        <label for="">Xếp Loại</label>
        <input type="text" name="xepLoai"> <br>
        <label for="">Lương Ngày</label>
        <input type="text" name="luongNgay"><br>
        <label for="">Ngày công</label>
        <input type="text" name="ngayCong"><br>
        <button type="submit" name="btn">Thêm</button>
    </form>
</body>

</html>