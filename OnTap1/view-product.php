<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Hình ảnh</th>
                <th>Chọn mua</th>
            </tr>
        </thead>
        <tbody>
            <?php
              $file=fopen("hang.txt","r") or die("Lỗi ");
              while(!feof($file)){
                $item=fgets($file);
                $items=explode("\t",$item);
                if($items[0]){
            
                ?>
            <tr>
                <td><?=$items[0]?></td>
                <td><?=$items[1]?></td>
                <td><?=$items[3]?></td>
                <td><?=$items[4]?></td>
                <td>
                    <img src="images/<?=$items[5]?>" alt="" width="100">
                </td>
                <td><button><a href="cart.php?id=<?=$items[0]?>">Chọn mua</a></button></td>
            </tr>
            <?php
                
                }
             
              }
              
             fclose($file);
            
            ?>
        </tbody>
    </table>
</body>

</html>