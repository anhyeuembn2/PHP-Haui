<?php 
  if(isset($_POST['btn'])){
     $a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];
     $delta=($b*$b)-(4*$a*$c);
     if($delta<0){
        echo "Phuong trinh vo nghiem";
     }else if($delta==0){
        $x=(-$b)/(2*$a);
        echo $x;
     }else {
        $x1=(-$b+sqrt($delta))/(2*$a);
        $x2=(-$b-sqrt($delta))/(2*$a);
        echo "Nghiem x1 :{$x1} - Nghiem x2 :{$x2}";
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
    <form action="bai1.php" method="post">
        <label for="">Gia tri a :</label>
        <input type="text" name="a"> <br>
        <label for="">Gia tri b</label>
        <input type="text" name="b"> <br>
        <label for="">Gia tri c</label>
        <input type="text" name="c"> <br>
        <input type="submit" name="btn" value="Tinh">
    </form>
</body>

</html>