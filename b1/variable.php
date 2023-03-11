<?php
   $error="";
   if($_SERVER['REQUEST_METHOD']=='POST'){
      if(empty($_POST['name'])){
        $error="Không được để trống";
      }else{
        $name=$_POST['name'];
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
        
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
    <form action="variable.php" method="POST">
        name: <input type="text" name="name">
        <span style="color:red"><?php echo $error ?></span><br>
        <input type="submit" value="Thêm">
    </form>
</body>

</html>