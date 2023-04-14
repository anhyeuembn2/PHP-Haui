<?php
  if(isset($_POST['btn'])){
    $id=$_POST['id'];  
    $name=$_POST['nameId'];
    $desc=$_POST['desc'];
    // lây dư liệu nguwoif dùng nhập từu form
  
   if(file_exists('data.txt')){ // kiêm tra xem file data.txt có tồn tịa hay chưa
      $file=fopen("data.txt","a"); // đã tồn tai thì mình sẽ viết bổ sung vào file
   }else{ 
     $file=fopen("data.txt","w"); // tạo ra file mới để viết 
   }
   fwrite($file,$id."\t".$name."\t".$desc."\n"); // viết vào file
   fclose($file); // đóng file
  }
?>
<?php 
 /*
 fwrite() viết vào file
 làm việc với file
 để mở file t dùng câu lệnh fopen(tenfile,option)
 option thứ 1: 
 r chỉ đọc 
 r+ dọc và viết
 w nếu nếu file chưa tồn tai thì sẽ tạo file mới
 a nếu file tồn tại viêt vào file luôn
 để dọc file t dung fread
 đọc 1 dòng trên file ta fgets
 kiểm tra sự kết thúc của file feof hay dùng while
 kiểm tra sự tồn tại của file ta dùng file_exits($tenFile)

 */

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
        <input type="text" name="id"> <br>
        <label for="">Tên nhóm</label>
        <input type="text" name="nameId"> <br>
        <label for="">Mô tả</label>
        <textarea name="desc" cols="30" rows="10"></textarea> <br>
        <button type="submit" name="btn">Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Desc</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $fn=fopen("data.txt","r") or die("Lỗi không thể mở file");
        while(!feof($fn)) { // nếu chưa hêt dòng
          $item=fgets($fn); // lấy giá trị trê tunwgf dòng của file
          $fileToConvertArr=explode("\t",$item); // chuyển chuỗi thành mảng
          echo "<pre/>";
          print_r($fileToConvertArr);
          if(!empty($fileToConvertArr[0])){
            
        
      ?>
            <tr>
                <td><?=$fileToConvertArr[0];?></td>
                <td><?=$fileToConvertArr[1];?></td>
                <td><?=$fileToConvertArr[2];?></td>
            </tr>

            <?php 
          };
        };
            fclose($fn); // đóng file ?>
        </tbody>
    </table>
</body>

</html>