<?php 
include "./db.php";
  if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $month=$_POST['month'];
    $dau=$_POST['chiSoDau'];
    $cuoi=$_POST['chiSoCuoi'];
    $error=[];
    if($name=="" || $month=="" || $cuoi=="" || $dau==""){
        if($name=="") {
            $error['name']="Không được để trống";
        }
        if($month=="") {
            $error['month']="Không được để trống";
        }
        if($dau=="") {
            $error['dau']="Không được để trống";
        }
        if($cuoi=="") {
            $error['cuoi']="Không được để trống";
        }
    }else{
        $sql="insert into tblhouseHold(tenChuHo,thang,chiSoDau,chiSoCuoi) values('$name',$month,$dau,$cuoi)";
        $result=$connect->query($sql);
        if($result){
             echo "<script>alert('Thêm thành công')</script>";
             echo "<script>window.location.href='index.php'</script>";
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
    <form action="add.php" method="post">
        <label for="">Họ và tên</label>
        <input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>"> <br>
        <?php if(isset($error['name'])) : ?>
        <span style="color:red"><?=$error['name']?></span><br>
        <?php endif;?>

        <label for="">Tháng</label>
        <input type="text" name="month" value="<?php if(isset($month)) echo $month ?>"> <br>
        <?php if(isset($error['month'])) : ?>
        <span style="color:red"><?=$error['month']?></span><br>
        <?php endif;?>
        <label for="">Chỉ số đầu</label>
        <input type="text" name="chiSoDau" value="<?php if(isset($dau)) echo $dau ?>"> <br>
        <?php if(isset($error['dau'])) : ?>
        <span style="color:red"><?=$error['dau']?></span><br>
        <?php endif;?>
        <label for="">Chỉ số cuối</label>
        <input type="text" name="chiSoCuoi" value="<?php if(isset($cuoi)) echo $cuoi ?>"> <br>
        <?php if(isset($error['cuoi'])) : ?>
        <span style="color:red"><?=$error['cuoi']?></span><br>
        <?php endif;?>
        <button type="submit" name="btn">Add</button>
    </form>
</body>

</html>