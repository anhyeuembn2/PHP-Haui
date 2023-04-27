<?php
  if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    if(file_exists('category.txt')){
        $file=fopen('category.txt','a');
    }else{
        $file=fopen('category.txt','w');
    }
    fwrite($file,$id . "\t" .$name ."\t" .$desc ."\n");
    fclose($file);
    header("location:product.php");
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
    <form action="index.php" method="post">
        <label for="">Mã nhóm</label>
        <input type="text" name="id"> <br> <br>
        <label for="">Tên nhóm</label>
        <input type="text" name="name"> <br> <br>
        <label for="">Miêu tả</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea> <br> <br>
        <button type="submit" name="btn">Thêm</button>
    </form>
</body>

</html>