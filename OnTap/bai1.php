<?php 
  if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $group=$_POST['group'];
    $error=[];
    $thanhTien=0;
    $qty=$_POST['qty'];
    $tinhThue=0;
    $month=$_POST['month'];
    $traCuoc=0;
    $tinhTien=0;
    if($name=="" && $id=="" && $group==""){
       $error['err1']="Không được để trống";
    }else{
        if(strcmp($group,"K")==0){
            $thanhTien=1000*$qty;
        }else if(strcmp($group,"G")==0){
            $thanhTien=75000*$qty;
        }else if(strcmp($group,"T")==0){
            $thanhTien=12000*$qty;
        }else if(strcmp($group,"S")==0){
            $thanhTien=30000*$qty;
        }else if(strcmp($group,"X")==0){
            $thanhTien=35000*$qty;
        }
       switch($month){
            case 1:
            case 2:
            case 3:
                $tinhThue=$thanhTien*0.12;
                break;
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                $tinhThue=$thanhTien*0.15;
                break;
            case 10:
            case 11:
            case 12:
                $tinhThue=$thanhTien*0.175;
                break;
       }
       if($thanhTien>=5000000){
           $traCuoc=0.75*$thanhTien;
       }else{
           $traCuoc=0.5*$thanhTien;
       }
       $tinhTien=$thanhTien-$traCuoc;

    }
    if($name=="" && $id!="" && $group!=""){
        $error['err2']="Không được để trống";
    }
    if($id=="" && $name!="" && $group!=""){
        $error['err3']="Không được để trống";
    }
    if($group=="" && $id!="" && $name!=""){
        $error['err4']="Không được để trống";
    }
  }
  if(isset($_POST['btn2'])){
    $_POST['id']="";
    $_POST['name']="";
    $_POST['group']="";
    $_POST['month']="";
    $_POST['thue']="";
    $_POST['traCuoc']="";
    $_POST['conLai']="";
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
    <form action="bai1.php" method="post">
        <table>
            <h1>BANG THONG KE NHAP XUAT HANG NAM 2020</h1>

            <tbody>
                <tr>

                    <label for="">Mã hàng</label>
                    <input type="text" name="id" value="<?php if(isset($id)) echo $id ?>"><br>
                    <?php  if(isset($error['err2'])):?>
                    <span style="color:red"><?=$error['err2']?></span> <br>
                    <?php endif; ?>
                    <?php  if(isset($error['err1'])):?>
                    <span style="color:red"><?=$error['err1']?></span> <br>
                    <?php endif; ?>

                    <label for="">Tên hàng</label>
                    <input type="text" name="name" value="<?php if(isset($name)) echo $name ?>"><br>
                    <?php  if(isset($error['err3'])):?>
                    <span style="color:red"><?=$error['err3']?></span> <br>
                    <?php endif; ?>
                    <?php  if(isset($error['err1'])):?>
                    <span style="color:red"><?=$error['err1']?></span> <br>
                    <?php endif; ?>
                    <label for="">Loại hàng</label>
                    <input type="text" name="group" value="<?php if(isset($group)) echo $group ?>"><br>
                    <?php  if(isset($error['err4'])):?>
                    <span style="color:red"><?=$error['err4']?></span> <br>
                    <?php endif; ?>
                    <?php  if(isset($error['err1'])):?>
                    <span style="color:red"><?=$error['err1']?></span><br>
                    <?php endif; ?>
                    <label for="">Sớ lượng</label>
                    <input type="text" name="qty" value="<?php if(isset($qty)) echo $qty ?>"><br>

                    <label for="">Tháng nhập</label>
                    <input type="text" name="month" value="<?php if(isset($month)) echo $month ?>"><br>

                    <label for="">Thuế</label>
                    <input type="text" name="thue" value="<?php if(isset($tinhThue)) echo $tinhThue ?>" readonly><br>

                    <label for="">Trả cưỡc</label>
                    <input type="text" name="traCuoc" value="<?php if(isset($traCuoc)) echo $traCuoc ?>" readonly><br>


                    <label for="">Còn lại</label>
                    <input type="text" name="conLai" value="<?php if(isset($tinhTien)) echo $tinhTien ?>" readonly><br>

                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <button type="click" name="btn2">Xóa</button>
                        <button type="submit" name="btn">Thành tiền</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>