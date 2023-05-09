<?php 
  if(isset($_POST['btn'])){
      $user=$_POST['user'];
      $password=$_POST['password'];
      $error=[];
      $success=[];
      if($user=="" || $password==""){
        $error['err']="Không được để trống";
      }else{
         $regex='/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)([A-Za-z\d\W]){8}$/';
         if(preg_match($regex,$password)){
            $success['alert']="Dữ liệu hợp lệ";
         }else{
            $error['err1']="Dữ liệu không hợp lệ";
         }

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
        <label for="">Tên đăng nhập</label>

        <input type="text" name="user"> <br>
        <?php if(isset($error['err'])): ?>
        <span style="color:red"><?=$error['err']?></span> <br>
        <?php endif?>
        <label for="">Mật khẩu</label>
        <input type="password" name="password"> <br>
        <?php if(isset($error['err'])): ?>
        <span style="color:red"><?=$error['err']?></span> <br>
        <?php endif?>
        <?php if(isset($error['err1'])): ?>
        <script>
        alert('<?=$error['err1']?>');
        </script>
        <?php endif?>
        <?php if(isset($success['alert'])): ?>
        <script>
        alert('<?=$success['alert']?>');
        </script>
        <?php endif?>
        <button type="submit" name="btn">Đăng nhập</button>
        <button type="reset">Hủy bỏ</button>
    </form>
</body>

</html>