<?php 
if(isset($_POST['btn'])){
    $arrayLe=[];
    $arrayChan=[];
    $arrayNumber=[];
    $number=$_POST['mang'];
    $array=explode(",",$number);
    $n=count($array);

    function numberChia5($n, &$arrayNumber){
        for($i=1;$i<$n;$i++){
            if($i%5==0){
                array_push($arrayNumber,$i);
            }
        }
    }

    function soLe($n, &$arrayLe, &$arrayChan){
        for($i=1;$i<=$n;$i++){
            if($i%2==0){
                array_push($arrayChan,$i);
            }else{
                array_push($arrayLe,$i);
            }
        }
        sort($arrayLe); 
        rsort($arrayChan); 
    }

     function tbcLe($n,$arrayLe){
         $sum=0;
         $count=0;
         
         for($i=1;$i<=$n;$i++){
            if(!empty($arrayLe[$i])){
                $sum+=$arrayLe[$i];
                $count++;
            }
         }
         return $count > 0 ? $sum/$count : 0;
     }

     function tbcChan($n,$arrayChan){
        $sum=0;
        $count=0;
        
        for($i=1;$i<=$n;$i++){
           if(!empty($arrayChan[$i])){
               $sum+=$arrayChan[$i];
               $count++;
           }
        }
        return $count > 0 ? $sum/$count : 0;
    }

    numberChia5($n, $arrayNumber);
    soLe($n, $arrayLe, $arrayChan);
    $tbcLe = tbcLe($n, $arrayLe);
    $tbcChan = tbcChan($n, $arrayChan);
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
    <form action="bai2.php" method="post">
        <table>
            <h2>NHẬP MẢNG VÀ HIỂN THỊ</h2>
            <thead>
                <label for="">Nhập mảng</label>
                <input type="text" name="mang" value="<?php if(isset($number)) echo $number ?>"> <br>
                <button name="btn">Thực hiện</button> <br>
            </thead>
            <tbody>
                <label for="">Phần tử chi hêt cho 5</label>
                <input type="text" name="nam" value="<?php
                  if(!empty($arrayNumber)){
                     $number1=implode(",",$arrayNumber);
                     echo $number1;
                  }

                ?>"> <br>
                <label for="">Phần tử lẻ xếp tăng dần</label>
                <input type="text" name="nam1" value="<?php
                  if(!empty($arrayLe)){
                     $number1=implode(",",$arrayLe);
                     echo $number1;
                  }
                ?>"> <br>
                <label for="">Phần tử chẵn xếp giảm dần</label>
                <input type="text" name="nam2" value="
                <?php
                  if(!empty($arrayLe)){
                     $number1=implode(",",$arrayChan);
                     echo $number1;
                  }
                ?>"> <br>
                <label for="">Trung bình công phần tử lẻ</label>
                <input type="text" name="tbcle" value="<?php if(isset($tbcLe)) echo $tbcChan ?>"> <br>
                <label for="">Trung bình cộng phần tử chẵn</label>
                <input type="text" name="tbcchan" value="<?php if(isset($tbcChan)) echo $tbcChan ?>">
            </tbody>
        </table>
    </form>
</body>

</html>