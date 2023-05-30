<?php 
   if(isset($_POST['btn'])){
       $id=$_POST['id'];
       $name=$_POST['name'];
       $desc=$_POST['desc'];
       if(file_exists("category.txt")){
          $file=fopen("category.txt",'a'); // nếu file tồn tại thì mile và ghi vào file
       }else{
          $file=fopen("category.txt",'w'); // nếu file chua tồn tại thì tạo file mới và viets vào file
       }
       $openFile=fopen("category.txt","r") or die("Lỗi không thể mở file");
       fwrite($file,$id."\t".$name."\t".$desc."\n");
       if($file){
          echo "<script>alert('Ghi File Thành Công')</script>";
          echo "<script>window.location.href='product.php'</script>";
          
       }
       fclose($openFile);
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÔN TẬP</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">Mã hàng</label>
        <input type="text" name="id"> <br>
        <label for="">Tên hàng</label>
        <input type="text" name="name"> <br>
        <label for="">Miêu tả</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea><br>
        <button type="submit" name="btn">Add</button>
    </form>
</body>

</html>