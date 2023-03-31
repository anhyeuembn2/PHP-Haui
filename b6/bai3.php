<?php
   $arratPoint=[];
  if(isset($_POST['btn'])){
    if(!empty($_POST['point'])){
        $point=$_POST['point']; // lay gia tri
        echo $point;
    if($point<4){
       $arratPoint['diem']="F";
    }else if($point>4 && $point<4.5){
        $arratPoint['diem']="D";
    }else if($point>4.5 && $point<5){
        $arratPoint['diem']="D+";
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
    <form action="bai3.php" method="post">
        <label for="">Nhap diem so :</label>
        <input type="text" name="point"> <br>
        <?php if(isset($arratPoint['diem']) ) :?>
        <span style="color:red"><?php echo $arratPoint['diem']?></span>
        <?php endif ;?>
        <br>
        <input type="submit" value="Nhap" name="btn">
    </form>
</body>

</html>