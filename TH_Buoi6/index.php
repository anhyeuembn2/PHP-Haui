<?php 
include "./db.php";
  if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $moTa=$_POST['moTa'];
     $sql="insert into tblcategory(tenNHom,moTa) values('$name','$moTa')";
     $result=$connect->query($sql);
     if($result){
        echo "<script>alert('Them thanh cong')</script>";
        echo "<script>window.location.href='product.php'</script>";
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
    <form action="index.php" method="post">
        <label for="">Ten nhom</label>
        <input type="text" name="name"> <br>
        <label for="">Mo ta</label>
        <input type="text" name="moTa"> <br>
        <button type="submit" name="btn">Them</button>
    </form>
</body>

</html>