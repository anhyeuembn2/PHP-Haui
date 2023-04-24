<?php
$error = array();
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
    
    if(empty($id)){
        $error['id'] = "Mã hàng không được để trống";
    }
    if(empty($name)){
        $error['name'] = "Tên hàng không được để trống";
    }
    if(empty($qty)){
        $error['qty'] = "Số lượng không được để trống";
    }
    if(empty($price)){
        $error['price'] = "Đơn giá không được để trống";
    }
    if(empty($desc)){
        $error['desc'] = "Mô tả không được để trống";
    }
    if(empty($file_name)){
        $error['file'] = "Ảnh không được để trống";
    }
    $file1 = fopen("hang.txt", 'r') or die("Lỗi");
    $isDuplicated = false;

while (!feof($file1)) {
    $item = fgets($file1);
    $it = explode("\t", $item);
    if ($it[0] === $id) {
        $error['err'] = "Mã sản phẩm bị trùng";
        $isDuplicated = true;
        break;
    }
}



if (!$isDuplicated) {
    if (empty($error)) {
        if(file_exists('hang.txt')){
            $file=fopen('hang.txt','a');
        }else{
            $file=fopen('hang.txt','w');
        }
        fwrite($file, trim($id) . "\t" . trim($name) . "\t" . trim($idGroup) . "\t" . trim($qty) . "\t" . trim($price) . "\t" . $file_name . "\t" . trim($desc) . "\r\n");
        fclose($file);
        echo "<script>alert('Thêm thành công!');window.location.href='data.php'</script>";
    }
}
    
    
    fclose($file1);
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

        <input type="text" name="id"><?php if(isset($error['id'])): ?>
        <span style="color:red"><?=$error['id']?></span>
        <?php else: ?>

        <span style="color:red"><?=(isset($error['err']) ? $error['err'] : "")?></span>
        <?php endif ?>
        <br> <br>
        <label for="">Tên hàng</label>

        <input type="text" name="name"><?php if(isset($error['name'])): ?>
        <span style="color:red"><?=$error['name']?></span>
        <?php endif; ?> <br> <br>
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

        <input type="number" name="qty"><?php if(isset($error['qty'])): ?>
        <span style="color:red"><?=$error['qty']?></span>
        <?php endif; ?> <br> <br>
        <label for="">Đơn giá</label>

        <input type="number" name="price"> <?php if(isset($error['price'])): ?>
        <span style="color:red"><?=$error['price']?></span>
        <?php endif; ?><br> <br>
        <label for="">Ảnh</label>

        <input type="file" name="file"> <?php if(isset($error['file'])): ?>
        <span style="color:red"><?=$error['file']?></span>
        <?php endif; ?><br> <br>
        <label for="">Mô tả</label>

        <textarea name="desc" id="" cols="30" rows="10"></textarea><?php if(isset($error['desc'])): ?>
        <span style="color:red"><?=$error['desc']?></span>
        <?php endif; ?> <br> <br>
        <button type="submit" name="btn">Thêm SP</button>
    </form>
</body>

</html>