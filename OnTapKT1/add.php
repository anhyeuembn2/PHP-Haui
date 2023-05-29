<?php
   include "./db.php"; 
   if(isset($_POST['btn'])){
       $name=$_POST['name'];
       $thang=$_POST['thang'];
       $dau=$_POST['dau'];
       $cuoi=$_POST['cuoi'];
       $sql="insert into tblhousehold(tenChuHo,thang,chiSoDau,chiSoCuoi) values('$name',$thang,$dau,$cuoi)";
       $result=$connect->query($sql);
       if($result){
          echo "<script>alert('Thêm thành công')</script>";
          echo "<script>window.location.href='index.php'</script>";
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
    <form action="add.php" method="post">
        <label for="">Tên chủ hộ</label>
        <input type="text" name="name"> <br>
        <label for="">Tháng</label>
        <input type="text" name="thang"> <br>
        <label for="">Chỉ số đầu</label>
        <input type="text" name="dau"> <br>
        <label for="">Chỉ số cuối</label>
        <input type="text" name="cuoi"> <br>
        <button type="submit" name="btn">Thêm</button>
    </form>
</body>

</html>