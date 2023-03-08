<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Name User">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="btn-login" value="Login">
    </form>
    <?php
      if(isset($_POST['btn-login'])){
         setcookie('username',$_POST['username'],time()+600);
         setcookie('password',$_POST['password'],time()*600);
         header('location:login.php');  
      }
    ?>
</body>

</html>