<?php 
  if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $error=[];
    if($id=="" || $name=="" || $desc==""){
      if($id==""){
         $error['id']="Không được để trống";
      }
      if($name==""){
        $error['name']="Không được để trông";
      }
      if($desc==""){
        $error['desc']="Không được để trống";
      }
    }else{
        if(file_exists("file category.txt")){
            $file=fopen("file category.txt","a");
        }else{
            $file=fopen("file category.txt","w");
        }
        fwrite($file,$id."\t".$name."\t".$desc."\n");
        if($file){
            echo "<script>alert('Thêm thành công')</script>";
            echo "<script>window.location.href='product.php'</script>"; 
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
    <form action="index.php" method="post">
        <label for="">Mã nhóm</label>
        <input type="text" name="id" value="<?php if(isset($id)) echo $id ?>"> <br>
        <?php if(isset($error['id'])) : ?>
        <span style="color:red"><?=$error['id']?></span><br>
        <?php endif; ?>
        <label for="">Tên nhóm</label>
        <input type="text" name="name" value="<?php if(isset($name)) echo $name ?>"> <br>
        <?php if(isset($error['name'])) : ?>
        <span style="color:red"><?=$error['name']?></span><br>
        <?php endif; ?>
        <label for="">Mô tả</label>
        <textarea name="desc" value="<?php if(isset($desc)) echo $desc ?>" cols="30" rows="10"></textarea><br>
        <?php if(isset($error['desc'])) : ?>
        <span style="color:red"><?=$error['desc']?></span><br>
        <?php endif; ?>
        <button type="submit" name="btn">Add</button>


    </form>
</body>

</html>