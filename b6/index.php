<?php 
 /*
 method gom hai tham so la get va post
 khi nao dung post va get
 post ma khong du lieu bi hien thi URL
 get laf nguoc lai
 action duong dan ma muon gui len
 mang thuan
 mang k tuan tu
 
 */
 
  $error=[]; // chua thong bao loi
 if(isset($_GET['btn'])){
    // co du lieu
    if(empty($_GET['user'])){
        $errror['err']="Khong duoc de trong";
    }else{
        $user=$_GET['user'];
    }
    if(empty($errror)){
        echo "{$user}";
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
    <form action="index.php" method="get">
        <label for="">Username</label>
        <input type="text" name="user"> <br>
        <?php if(isset($errror['err']) ) : ?>
        <span style="color:red"><?php echo $error['err'] ?></span>
        <?php endif ;?>
        <input type="submit" name="btn" value="Nhap">

    </form>
</body>

</html>