<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã Hàng</th>
            <th>Tên hàng</th>
            <th>Nhóm hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>

            <th width="400">Ảnh</th>
            <th>Miêu tả</th>
            <td>Thành tiền</td>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php 
        $count=0;
        $fn=fopen("hang.txt","r") or die("Lỗi không thể mở file");
        while(!feof($fn)) { // nếu chưa hêt dòng
          $item=fgets($fn);
          $count++; // lấy giá trị trê tunwgf dòng của file
          $fileToConvertArr=explode("\t",$item); // chuyển chuỗi thành mảng

          if(!empty($fileToConvertArr[0])){
            
        
      ?>
        <tr>
            <td><?=$count?></td>
            <td><?=$fileToConvertArr[0];?></td>
            <td><?=$fileToConvertArr[1];?></td>
            <td><?=$fileToConvertArr[2];?></td>
            <td><?=$fileToConvertArr[3];?></td>
            <td><?=number_format($fileToConvertArr[4],0,'.','.');?>đ</td>
            <td height="300">
                <img src="images/<?=$fileToConvertArr[5]?>" width="300" height="200" alt="">
            </td>
            <td><?=$fileToConvertArr[6]?></td>
            <td><?=number_format($fileToConvertArr[3]*$fileToConvertArr[4],0,'.','.');?>đ</td>
            <td><a href="bai2.php">Tiếp tục mua hàng</a></td>
        </tr>

        <?php 
          };
        };
            fclose($fn); // đóng file ?>

    </tbody>
</table>

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
    /*  tenmang as tenbine*/
}
</style>