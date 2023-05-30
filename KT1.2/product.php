<?php 
  if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $idGroup=$_POST['idGroup'];
    $file_name="";
    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        echo "<pre/>";
        print_r($file);
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"images/$file_name");
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
    <form action="product.php" method="post" enctype="multipart/form-data">
        <label for="">Mã hàng</label>
        <input type="text" name="id"> <br>
        <label for="">Tên hàng</label>
        <input type="text" name="name"> <br>
        <label for="">Nhóm hàng</label>
        <select name="idGroup" id="">
            <?php
              $file=fopen("category.txt","r") or die("Lỗi ");
              while(!feof($file)){
                $item=fgets($file);
                $items=explode("\t",$item);
                if($items[0]){
            
                ?>
            <option value="<?=$items[1]?>"><?=$items[1]?></option>
            <?php
                
                }
                
              }
              
             fclose($file);
            
            ?>

        </select> <br>
        <label for="">Hình ảnh</label>
        <input type="file" name="file"><br>
        <button type="submit" name="btn">Add</button>


    </form>
</body>

</html>