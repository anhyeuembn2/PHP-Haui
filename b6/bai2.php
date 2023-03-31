<?php

 /*
  2x+3y=4
  3x+4y=6
  25 5
  26 3

 */
 if(isset($_POST['btn'])){
    $a1=isset($_POST['a1']) ? $_POST['a1'] : "";
    $b1=isset($_POST['a2']) ? $_POST['a2'] : "";
    $c1=isset($_POST['a3']) ? $_POST['a3'] : "";
    $a2=isset($_POST['b1']) ? $_POST['b1'] : "";
    $b2=isset($_POST['b2']) ? $_POST['b2'] : "";
    $c2=isset($_POST['b3']) ? $_POST['b3'] : "";
    $matrix=($a1*$b2-$b1*$a2);
    if($matrix==0){
        echo "Phuong trinh vo nghiem";
    }else{
        $x1=($c1*$b2-$c2*$b1)/$matrix;
        $x2=($a1*$c2-$a2*$c1)/$matrix;
        echo "Nghiem x1={$x1}- Nghiem x2={$x2}";
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
    <form action="bai2.php" method="post">
        <label for="">Nhap a1</label>
        <input type="text" name="a1"> <br>
        <label for="">Nhap a2</label>
        <input type="text" name="a2"> <br>
        <label for="">Nhap a3</label>
        <input type="text" name="a3"> <br>
        <label for="">Nhap b1</label>
        <input type="text" name="b1"> <br>
        <label for="">Nhap b2</label>
        <input type="text" name="b2"> <br>
        <label for="">Nhap b3</label>
        <input type="text" name="b3"> <br>
        <input type="submit" name="btn" id="" value="Tinh">


    </form>
</body>

</html>