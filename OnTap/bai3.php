<?php 
  if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $array=explode(",",$id);
    $n=count($array);
    $arrayChan=[];
    $arrayLe=[];
    function check($n,&$arrayChan,&$arrayLe,&$array1){
        for($i=0;$i<$n;$i++){
            if($array1[$i]%2==0 && $array1[$i]!=0){
                array_push($arrayChan,$array1[$i]);
            }else if($array1[$i]%2!=0 && $array1[$i]!=0){
                array_push($arrayLe,$array1[$i]);
            }
        }
    }
    check($n,$arrayChan,$arrayLe,$array);
    $item1=implode(",",$arrayChan);
    $item2=implode(",",$arrayLe);
    $arrayTotal=[];
    array_push($arrayTotal,$item1,0,$item2);
    $total=implode(",",$arrayTotal);
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
    <form action="bai3.php" method="post">
        <label for="">Nhập mảng</label>
        <input type="text" name="id" value="<?php if(isset($id)) echo $id ?>"> <br>
        <label for="">Mảng sau khi săp xếp</label>
        <input type="text" value="<?php if(isset($total)) echo $total ?>" readonly> <br>
        <button type="submit" name="btn">Sắp xếp</button>
    </form>
</body>

</html>