<?php 
 if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $idGroup=$_POST['groupId'];
    $month=$_POST['month'];
    $qty=$_POST['qty'];
    $maQG=$_POST['idQG'];
    $error=[];
    $triGia=0;
    $tinhVanChuyen=0;
    $thanhTien=0;
    if($id=="" || $month=="" || $idGroup=="" || $qty=="" || $name=="" || $maQG==""){
      $error['err1']="Không được để trống";
    }else{
         if(strcmp($idGroup,"T")==0){
             $triGia=700*$qty;
         }else if(strcmp($idGroup,"N")==0){
            $triGia=400*$qty;
         }
        if(strcmp($maQG,"AU")==0){
            $triGia=120*$qty;
        }else if(strcmp($maQG,"KO")==0){
            $triGia=100*$qty;
        }else if(strcmp($maQG,"GE")==0){
            $triGia=150*$qty;
        }
        if($month==5){
            $thanhTien=($triGia+$tinhVanChuyen)*0.05;
        }else{
            $thanhTien=$triGia+$tinhVanChuyen;
        }

    }
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
<style>
table {
    border-collapse: collapse;
    border: 1px solid black;
    /* Thêm style border cho table */
    width: 80%;
    /* Đặt chiều rộng của bảng là 100% */
}


tr,
td {


    border: 1px solid black;
    /* Thêm style border cho th, td */
    padding: 10px;
    /* Thêm khoảng cách giữa nội dung và đường viền của các ô */

    /* Căn giữa nội dung trong các ô */
    /*  tenmang as tenbine*/

}



input {
    width: 80%;
    height: 30px;
}

#n1 {
    text-align: center;
}

button {
    width: 100px;
    height: 40px;

}
</style>

<body>
    <form action="bai1.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>
                        <h1 id="n1">BÁO CÁO BÁN HÀNG THÉP XÂY DỰNG</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%">
                        <label for="">Mã hàng</label>

                    </td>
                    <td width="50%">
                        <input type="text" name="id" value="<?php if(isset($id)) echo $id ?>"><br>
                        <?php if(isset($error['err1'])) : ?>
                        <span style="color:red"><?=$error['err1']?></span><br>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tên hàng</label>

                    </td>
                    <td>
                        <input type="text" name="name" value="<?php if(isset($name)) echo $name ?>"> <br>
                        <?php if(isset($error['err1'])) : ?>
                        <span style="color:red"><?=$error['err1']?></span><br>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Loại hàng</label>

                    </td>
                    <td>
                        <input type="text" name="groupId" value="<?php if(isset($idGroup)) echo $idGroup ?>"><br>
                        <?php if(isset($error['err1'])) : ?>
                        <span style="color:red"><?=$error['err1']?></span> <br>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Số lượng</label>

                    </td>
                    <td>
                        <input type="text" name="qty" value="<?php if(isset($qty)) echo $qty ?>"><br>
                        <?php if(isset($error['err1'])) : ?>
                        <span style="color:red"><?=$error['err1']?></span> <br>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mã quốc gia</label>

                    </td>
                    <td>
                        <input type="text" name="idQG" value="<?php if(isset($maQG)) echo $maQG ?>"><br>
                        <?php if(isset($error['err1'])) : ?>
                        <span style="color:red"><?=$error['err1']?></span><br>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tháng</label>

                    </td>
                    <td>
                        <input type="text" name="month" value="<?php if(isset($month))  echo $month ?>"><br>
                        <?php if(isset($error['err1'])) : ?>
                        <span style="color:red"><?=$error['err1']?></span> <br>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Trị giá</label>

                    </td>
                    <td>
                        <input type="text" name="triGia" readonly value="<?php  if(isset($triGia)) echo $triGia ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Phí vận chuyển</label>

                    </td>
                    <td>
                        <input type="text" name="phi" readonly
                            value="<?php if(isset($tinhVanChuyen)) echo $tinhVanChuyen ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Thành tiền</label>

                    </td>
                    <td>
                        <input type="text" name="total" value="<?php if(isset($thanhTien)) echo $thanhTien ?>" readonly>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>
                        <button type="submit" name="btn2">Xóa</button>
                        <button type="submit" name="btn">Tính tiền</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>