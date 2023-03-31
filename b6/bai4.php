<?php 
 $error=[];
 if(isset($_POST['btn'])){
    if(!empty($_POST['n'])){
        $n=$_POST['n'];
        $soHoanHao=check($n);
        if($soHoanHao){
            echo "{$n} la so hoan hao";
        }else{
            echo "{$n} k la so hoan hao";
        }
    }else{
        $error['err']="Khong duoc de trong";
    }
 }
 function check($n){
    //6=1+2+3
    $tong=0;
    for($i=1;$i<$n;$i++){
        if($n%$i==0){
            $tong+=$i;
        }
    }
    if($n==$tong){
        return true;
    }
    return false;
 }
 for($i=1;$i<=1000;$i++){
    if(check($i)){
        echo "{$i}";
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
    <form action="bai4.php" method="post">
        <label for="">Nhap so :</label>
        <input type="text" name="n"> <br>
        <?php if(isset($error['err'])) :?>
        <span><?=$error['err'] ?></span>
        <?php endif ; ?>
        <input type="submit" value="Tinh" name="btn">
    </form>
</body>

</html>