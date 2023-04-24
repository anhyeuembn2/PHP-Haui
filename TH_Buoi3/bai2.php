<?php
 if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $idGroup=$_POST['idGroup'];
    $qty=trim($_POST['qty']);
    $price=$_POST['price'];
    $desc = str_replace(array("\r", "\n"), '', trim($_POST['desc']));

    if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"images/.$file_name");
    }
    if(file_exists('hang.txt')){
        $file=fopen('hang.txt','a');

    }else{
        $file=fopen('hang.txt','w');
    }
    fwrite($file, trim($id) . "\t" . trim($name) . "\t" . trim($idGroup) . "\t" . trim($qty) . "\t" . trim($price) . "\t" . $file_name . "\t" . trim($desc) . "\r\n");


    fclose($file);
    echo "<script>alert('Thêm thành công!');window.location.href='data.php'</script>";
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
    <form action="bai2.php" method="post" enctype="multipart/form-data">
        <label for="">Mã hàng</label>
        <input type="text" name="id"> <br> <br>
        <label for="">Tên hàng</label>
        <input type="text" name="name"> <br> <br>
        <label for="">Nhóm hàng</label>
        <select name="idGroup" id="">
            <?php 
$fn=fopen("data.txt","r") or die("Lỗi không thể mở file");
while(!feof($fn)) { // nếu chưa hêt dòng
  $item=fgets($fn); // lấy giá trị trê tunwgf dòng của file
  $fileToConvertArr=explode("\t",$item); // chuyển chuỗi thành mảng
 
  if(!empty($fileToConvertArr[0])){
    

?>


            <option value="<?=$fileToConvertArr[2]?>"><?=$fileToConvertArr[2]?></option>


            <?php 
  };
};
    fclose($fn); // đóng file ?>


        </select>
        <br><br />

        <label for="">Số lượng</label>
        <input type="number" name="qty"> <br> <br>
        <label for="">Đơn giá</label>
        <input type="number" name="price"> <br> <br>
        <label for="">Ảnh</label>
        <input type="file" name="file"> <br> <br>
        <label for="">Mô tả</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea> <br> <br>
        <button type="submit" name="btn">Thêm SP</button>
    </form>
</body>

</html>