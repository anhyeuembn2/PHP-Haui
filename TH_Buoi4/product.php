<?php 
 if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $idGroup=$_POST['idGroup'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"upload/$file_name");
    }
    if(file_exists('hang.txt')){
        $fn=fopen('hang.txt','a');
    }else{
        $fn=fopen('hang.txt','w');
    }
    fwrite($fn,trim($id) . "\t" .trim($name) ."\t" .trim($idGroup) ."\t" .trim($qty) ."\t" .trim($price) ."\t" .trim($file_name) ."\n" );
    fclose($fn);
   header("location:view.php");
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
        <input type="text" name="id"> <br> <br>
        <label for="">Tên hàng</label>
        <input type="text" name="name" id=""> <br> <br>
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

        </select> <br> <br>
        <label for="">Số lượng</label>
        <input type="text" name="qty"> <br><br>
        <label for="">Đon giá</label>
        <input type="text" name="price"> <br><br>
        <label for="">Hình ảnh</label>
        <input type="file" name="file"> <br> <br>
        <button type="submit" name="btn">Thêm</button>
    </form>
</body>

</html>