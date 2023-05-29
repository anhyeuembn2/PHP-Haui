<?php
include "./db.php";
$sql = "SELECT * FROM tblcategory";
$result = $connect->query($sql);
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $cate=$_POST['category_id'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $file_name = ""; 

    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"upload/$file_name");
    }
    $sql="insert into tblproduct(tenHang,cateId,qty,price,image) values('$name',$cate,$qty,$price,'$file_name')";
    $result=$connect->query($sql);
    if($result){
        echo "<script>alert('Them thanh cong')</script>";
        echo "<script>window.location.href='view-product.php'</script>";
     }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="product.php" method="post" enctype="multipart/form-data">

        <label for="">Ten hang</label>
        <input type="text" name="name"><br>
        <label for="">Nhom hang</label>
        <select name="category_id">
            <?php foreach ($result as $item) : ?>
            <option value="<?php echo $item['id']; ?>"><?php echo $item['tenNHom']; ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">So luong</label>
        <input type="text" name="qty"> <br>
        <label for="">Don Gia</label>
        <input type="text" name="price"> <br>
        <label for="">Anh</label>
        <input type="file" name="file"> <br>
        <button type="submit" name="btn">Them</button>
    </form>
</body>

</html>