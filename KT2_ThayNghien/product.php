<?php
  include "./db.php";
  $sql='select * from tblcategory';
  $result=$connect->query($sql);
  if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $idGroup=$_POST['idGroup'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $file_name="";
    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"upload/$file_name");
        $sql1="insert into tblproduct(tenHang,cateId,qty,price,image) values('$name',$idGroup,$qty,$price,'$file_name')";
        $result1=$connect->query($sql1);
        if($result1){
            if($result){
                echo "<script>alert('Thêm thành công')</script>";
                echo "<script>window.location.href='view-data.php'</script>";
            }
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="product.php" method="post" enctype="multipart/form-data">
        <label for="">Tên hàng</label>
        <input type="text" name="name"> <br>
        <label for="">Nhóm hàng</label>
        <select name="idGroup" id="">
            <?php foreach($result as $item):   ?>
            <option value="<?=$item['id']?>"><?=$item['tenNHom']?></option>

            <?php endforeach; ?>
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