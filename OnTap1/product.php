<?php
  if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $idGroup=$_POST['idGroup'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $file_name="";
    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
      
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"images/$file_name");
    }
    if(file_exists("hang.txt")){
        $file=fopen("hang.txt",'a');
    }else{
        $file=fopen("hang.txt",'w');
    }
    fwrite($file,$id."\t".$name."\t".$idGroup."\t".$qty."\t".$price."\t".$file_name."\n");
    if($file){
        echo "<script>alert('Ghi File Thành Công')</script>";
        echo "<script>window.location.href='view-product.php'</script>";
    }
    fclose($file);
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
        <label for="">Số lượng</label>
        <input type="text" name="qty"> <br>
        <label for="">Đơn giá</label>
        <input type="text" name="price"> <br>
        <label for="">Hình ảnh</label>
        <input type="file" name="file"> <br>
        <button name="btn" type="submit">Thêm</button>
    </form>
</body>

</html>