<?php 
 if(isset($_POST['btn'])){
    $n=$_POST['n'];
    $error=[];
    if($n<0){
        $error['err']="N phải lớn hơn 0";
    }else{
        $kqTinh=tinhTong($n);
    }
 }
  function giaiThua($x){
     $tich=1;
     for($i=1;$i<=$x;$i++){
        $tich=$tich*$i;
     }
     return $tich;
  }
  function tinhTong($n){
    $sum=1;
    for($i=1;$i<=$n;$i++){
        $sum+=($i*$i)/(giaiThua($i));
    }
    return $sum;
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
        <label for="">Nhập sô n :</label>
        <input type="text" name="n" value="<?php if(isset($n)) echo $n?>"> <br>
        <?php if(isset($error['err'])): ?>
        <span style="color:red"><?=$error['err']?></span> <br>
        <?php endif ; ?>
        <label for="">Kêt quả biểu thức :</label>
        <input type="text" name="kq" value="<?php if(isset($kqTinh)) echo $kqTinh?>"> <br>
        <button name="btn" type="submit">Tính</button>
    </form>
</body>

</html>