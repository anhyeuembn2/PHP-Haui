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

                <th>Tong tien</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $file = fopen("electronic.txt", 'r') or die("Loi");
            $count = 0;
            while (!feof($file)) {
                $item = fgets($file);
                $arr = explode("\t", $item);
                if ($arr[0]) {
                    $chiSo = $arr[4] - $arr[3];
                    $tienDien = 0;
                    if ($chiSo <= 50) {
                        $tienDien = $chiSo * 1678;
                    } else if ( $chiSo <= 100) {
                        $tienDien = (50 * 1678) + ($chiSo - 50) *1734 ;
                    } else if ( $chiSo <= 200) {
                        $tienDien = (50* 1678) + (50 * 1734) + ($chiSo - 100) * 2014;
                    } else if( $chiSo<=300){
                        $tienDien = (50* 1678) + (50 * 1734) + 100*2014+($chiSo-200)*2536;
                    }else if($chiSo<=400){
                        $tienDien = (50* 1678) + (50 * 1734) + 100*2014+100*2536+($chiSo-300)*2834;
                    }else{
                        $tienDien = (50* 1678) + (50 * 1734) + 100*2014+100*2536+100*2834+($chiSo-400)*2927;
                    }
                    $thueVAT = $tienDien * 0.1;
                    $tongTien = $tienDien + $thueVAT;
            ?>
            <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $arr[0] ?></td>
                <td><?php echo $arr[1] ?></td>
                <td><?php echo $arr[2] ?></td>
                <td><?php echo $chiSo ?></td>
                <td><?php echo $tienDien ?></td>
                <td><?php echo $thueVAT ?></td>

                <td><?=number_format($tienDien+$thueVAT ,0,'.','.') ?></td>
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