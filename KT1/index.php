<?php
  if(isset($_POST['btn'])){ // kiem tra xem nguoi dung da click vao o dang nhap chua
      $user=$_POST['user']; // lay gia tri ngoi dung nhap vao o user
      $password=$_POST['password']; // lay gia tri nguoi dung hap vao o password
      $error=[]; // tao ra 1 mang chua tat ca cac loi
      $sucess=[];
      if($user=="" && $password==""){ // truong hop 
           $error['err']="Khong duoc de trong";
      }
      if($user!="" && $password==""){ // trg hop user k rong va password rong
         $error['err1']="Khong duoc de trong";
      }
      if($user=="" && $password!=""){ // truong hop 
           $error['err2']="Khong duoc de trong";
      }
      if($user!="" && $password!=""){      
          $regex='/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)[A-Za-z\d\W]{8}$/';

           if(preg_match($regex,$password)){
              $sucess['alert']="Du lieu hop le";
           }else{
              $error['err4']="Du lieu khong hop le";
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
        <label for="">Ten dang nhap :</label>
        <input type="text" name="user" value="<?php if(isset($user)) echo $user?>"> <br>
        <?php if(isset($error['err'])): ?>
        <span style="color:red"><?=$error['err']?></span> <br>
        <?php endif; ?>
        <?php if(isset($error['err2'])) :?>
        <span style="color:red"><?=$error['err2']?></span> <br>
        <?php endif; ?>
        <label for="">Mat khau :</label>
        <input type="password" name="password" value="<?php if(isset($password)) echo $password?>"> <br>
        <?php if(isset($error['err'])): ?>
        <span style=" color:red"><?=$error['err']?></span> <br>
        <?php endif; ?>
        <?php if(isset($error['err1'])) :?>
        <span style="color:red"><?=$error['err1']?></span> <br>
        <?php endif; ?>
        <?php if(isset($sucess['alert'])) : ?>
        <script>
        alert('<?=$sucess['alert']?>')
        </script>
        <?php endif; ?>
        <?php if(isset($error['err4'])) : ?>
        <script>
        alert('<?=$error['err4']?>')
        </script>
        <?php endif; ?>
        <button type="submit" name="btn">Dang nhap</button>
        <button type="reset">Huy bo</button>
    </form>
</body>

</html>