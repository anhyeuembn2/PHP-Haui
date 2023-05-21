<?php
include "./db.php";
$count = 1;
$sql = "SELECT * FROM tblhouseHold";
$result = $connect->query($sql);

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
                <th>Số điện tiêu thụ</th>
                <th>Số tiền phải trả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $value) : ?>
            <?php
               
                $soDien = $value['chiSoCuoi']-$value['chiSoDau'];
                $dauGia = 0;
                
                if ($soDien <= 50) {
                    $dauGia = 1678;
                } else if ($soDien >= 51 && $soDien <= 100) {
                    $dauGia = 1734;
                } else if ($soDien >= 101 && $soDien <= 200) {
                    $dauGia = 2014;
                } else if ($soDien >= 201 && $soDien <= 300) {
                    $dauGia = 2536;
                } else if ($soDien >= 301 && $soDien <= 400) {
                    $dauGia = 2834;
                } else {
                    $dauGia = 2927;
                }

                $soTienPhaiTra = ($soDien * $dauGia)*0.1;
                ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $value['tenChuHo'] ?></td>
                <td><?= $value['thang'] ?></td>
                <td><?= $value['chiSoDau'] ?></td>
                <td><?= $value['chiSoCuoi'] ?></td>
                <td><?= $soDien ?></td>
                <td><?= $soTienPhaiTra ?></td>
                <td>
                    <a href="edit.php?id=<?=$value['id']?>">Edit</a>
                    <a onclick="confirm('Bạn có chắc chắn muốn xóa ?')"
                        href="delete.php?id=<?=$value['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>