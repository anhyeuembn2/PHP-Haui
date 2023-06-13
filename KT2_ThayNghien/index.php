<?php 
 include "./db.php";
 if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $sql="insert into tblcategory(tenNHom,moTa) values('$name','$description')";
    $result=$connect->query($sql);
    if($result){
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
    <form action="index.php" method="post">
        <label for="">Tên nhóm</label>
        <input type="text" name="name"> <br>
        <label for="">Mô tả</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea> <br>
        <button name="btn" type="submit">Thêm</button>
    </form>
</body>

</html>