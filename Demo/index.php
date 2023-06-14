<?php 
include "./db.php";
$sql="select * from tblcategory";
$result=$connect->query($sql);
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $idCate=$_POST['idGroup'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $file_name="";
    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"upload/$file_name");
    }
    $sql1="insert into tblitems(name,cateId,qty,price,image) values('$name',$idCate,$qty,$price,'$file_name')";
    $kq=$connect->query($sql1);
    if($kq){
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href='product.php'</script>";
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
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="">Ten hang</label>
        <input type="text" name="name"> <br>
        <label for="">Nhom hang</label>
        <select name="idGroup" id="">
            <?php foreach($result as $item) : ?>
            <option value="<?=$item['id']?>"><?=$item['name']?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="">So luong</label>
        <input type="text" name="qty"> <br>
        <label for="">Don gia</label>
        <input type="text" name="price"> <br>
        <label for="">Hinh anh</label>
        <input type="file" name="file"><br>
        <button name="btn" type="submit">Them</button>
    </form>
</body>

</html>