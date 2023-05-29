<?php 
 include "./db.php";
 $sql="select * from tblhousehold";
 $result=$connect->query($sql); // trả về object
 $count=1;
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
    <button><a href="add.php">Thêm</a></button>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Tháng</th>
                <th>Chỉ số đầu</th>
                <th>Chỉ số cuối</th>
                <th>Số điện</th>
                <th>Số tiền</th>
                <th>Hành động</th>

            </tr>
        </thead>
        <tbody>
            <?php while($item=$result->fetch_assoc()): ?>
            <?php 
                $soDien=$item['chiSoCuoi']-$item['chiSoDau'];
                $tienDien=0;
                if($soDien <= 50){
                    $tienDien = (1678 * $soDien)*0.1 ;
                }else if($soDien >= 51 && $soDien <=100){
                    $tienDien = (50 *1678 + ($soDien - 50)*1734) * 0.1;
                }else if($soDien >=101 && $soDien <= 200){
                    $tienDien = (50 *1678 + 50 *1734+ ($soDien - 100)*2014) * 0.1;
                }else if($soDien >=201 && $soDien <= 300){
                    $tienDien = (50*1678 + 50*1734 + 100*2014 +100*2536 + ($soDien - 300) * 2834) * 0.1;
                }else if($soDien >= 301 && $soDien <= 400){
                   $tienDien = (50*1678 + 50*1734 + 100*2014 +100*2536 + ($soDien - 300) * 2834) * 0.1;
                }else{
                    $tienDien = (50*1678 + 50*1734 + 100*2014 + 100*2536 + 100*2834 + ($soDien - 400)*2927)*0.1;
                }
              ?>
            <tr>
                <td><?=$count++?></td>
                <td><?=$item['tenChuHo']?></td>
                <td><?=$item['thang']?></td>//
                <td><?=$item['chiSoDau']?></td>
                <td><?=$item['chiSoCuoi']?></td>
                <td><?=$soDien?></td>
                <td><?=$tienDien?></td>
                <td>
                    <button><a onclick="confirm('Bạn có chắc chắn muốn xóa không?')"
                            href="delete.php?id=<?=$item['id']?>">Xóa</a></button>
                    <button><a href="">Sửa</a></button>
                </td>
            </tr>
            <?php endwhile ; ?>

        </tbody>

    </table>
</body>

</html>