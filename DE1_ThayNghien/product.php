<?php 
  if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $soDau=$_POST['soDau'];
    $soCuoi=$_POST['soCuoi'];
    $error=[];
    if($name=="" || $month=="" || $year=="" || $soCuoi=="" || $soCuoi==""){
        if($name==""){
              $error['name']="Khong duoc de trong";
        }
        if($name==""){
            $error['month']="Khong duoc de trong";
      }
      if($name==""){
        $error['year']="Khong duoc de trong";
    }
        if($name==""){
        $error['soCuoi']="Khong duoc de trong";
    }
     if($name==""){
    $error['soDau']="Khong duoc de trong";
     }
    }else{
        if(file_exists('water.txt')){
            $file=fopen("water.txt",'a');
        }else{
            $file=fopen("water.txt",'w');
        }
        fwrite($file,$name."\t".$month."\t".$year."\t".$soDau."\t".$soCuoi."\n");
        if($file){
            echo "<script>alert('Them Thanh cong')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        fclose($file);
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
    <form action="product.php" method="post">
        <label for="">Ho va ten</label>
        <input type="text" name="name"> <br>
        <?php if(isset($error['name'])) : ?>
        <span style="color:red"><?=$error['name']?></span><br>
        <?php endif;?>
        <label for="">Thang</label>
        <input type="text" name="month"> <br>
        <?php if(isset($error['month'])) : ?>
        <span style="color:red"><?=$error['month']?></span><br>
        <?php endif;?>
        <label for="">Nam</label>
        <input type="text" name="year"> <br>
        <?php if(isset($error['year'])) : ?>
        <span style="color:red"><?=$error['year']?></span><br>
        <?php endif;?>
        <label for="">So dau</label>
        <input type="text" name="soDau"> <br>
        <?php if(isset($error['soDau'])) : ?>
        <span style="color:red"><?=$error['soDau']?></span><br>
        <?php endif;?>
        <label for="">So Cuoi</label>
        <input type="text" name="soCuoi"><br>
        <?php if(isset($error['soCuoi'])) : ?>
        <span style="color:red"><?=$error['soCuoi']?></span><br>
        <?php endif;?>
        <button type="submit" name="btn">Add</button>
    </form>
</body>

</html>