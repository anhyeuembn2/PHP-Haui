<?php 
include "./db.php";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from tblhouseHold where id=$id";
    $arr=$connect->query($sql);
    $key=mysqli_fetch_array($arr);
    
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
    <form action="save-user.php" method="post">
        <input type="hidden" value="<?php if(isset($key['id'])) echo $key['id']?>" name="id">
        <label for="">Họ và tên</label>
        <input type="text" name="name" value="<?php if(isset($key['tenChuHo'])) echo $key['tenChuHo'] ?>"> <br>


        <label for="">Tháng</label>
        <input type="text" name="month" value="<?php if(isset($key['thang'])) echo $key['thang'] ?>"> <br>

        <label for="">Chỉ số đầu</label>
        <input type="text" name="chiSoDau" value="<?php if(isset($key['chiSoDau'])) echo $key['chiSoDau'] ?>"> <br>

        <label for="">Chỉ số cuối</label>
        <input type="text" name="chiSoCuoi" value="<?php if(isset($key['chiSoCuoi'])) echo $key['chiSoCuoi'] ?>"> <br>

        <button type="submit" name="btn">Edit</button>
    </form>
</body>

</html>