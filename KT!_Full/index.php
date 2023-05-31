<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    border-collapse: collapse;
    border: 1px solid black;

    width: 100%;

}

th,
td {
    border: 1px solid black;


    text-align: center;

}
</style>

<body>
    <button> <a href="product.php">Them</a></button>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ho va ten</th>
                <th>Thang</th>
                <th>Nam</th>
                <th>So dien tieu thu</th>
                <th>Thanh Tien</th>
                <th>Thue VAT</th>
                <th>Thue BVMT</th>
                <th>Tong tien</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $file = fopen("water.txt", 'r') or die("Loi");
            $count = 0;
            while (!feof($file)) {
                $item = fgets($file);
                $arr = explode("\t", $item);
                if ($arr[0]) {
                    $chiSo = $arr[4] - $arr[3];
                    $tienDien = 0;
                    if ($chiSo <= 10) {
                        $tienDien = $chiSo * 5000;
                    } else if ($chiSo <= 20) {
                        $tienDien = (10 * 500) + ($chiSo - 10) * 10000;
                    } else if ($chiSo <= 30) {
                        $tienDien = (10 * 5000) + (10 * 10000) + ($chiSo - 20) * 15000;
                    } else {
                        $tienDien = (10 * 5000) + (10 * 10000) + (10 * 15000) + ($chiSo - 30) * 20000;
                    }
            ?>
            <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $arr[0] ?></td>
                <td><?php echo $arr[1] ?></td>
                <td><?php echo $arr[2] ?></td>
                <td><?php echo $chiSo ?></td>
                <td><?php echo $tienDien ?></td>
                <td><?php echo $tienDien * 0.1 ?></td>
                <td><?php echo $tienDien * 0.15 ?></td>
                <td><?=number_format($tienDien + $tienDien * 0.1 + $tienDien * 0.15,0,'.','.') ?></td>
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