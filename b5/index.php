<?php 
 $totalRow=25;
 $perpage=5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
        /* Thêm style border cho table */
        width: 100%;
        /* Đặt chiều rộng của bảng là 100% */
    }

    th,
    td {
        border: 1px solid black;
        /* Thêm style border cho th, td */
        padding: 10px;
        /* Thêm khoảng cách giữa nội dung và đường viền của các ô */
        text-align: center;
        /* Căn giữa nội dung trong các ô */
    }
    </style>
</head>

<body>
    <table>
        <table>
            <tbody>
                <?php 
             for($i = 1; $i <= $totalRow; $i++){
                 echo "<td>" . $i . "</td>";
                 
                 if($i % $perpage == 0){
                     echo "</tr><tr>"; // Khi đạt vị trí cuối cùng của mỗi hàng, đóng hàng hiện tại và mở hàng mới
                 }
             }
            ?>
            </tbody>
        </table>
    </table>
</body>

</html>