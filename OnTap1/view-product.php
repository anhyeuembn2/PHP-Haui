<table>
    <thead>
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Hình ảnh</th>
            <th>Chọn mua</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        $fn=fopen("hang.txt","r") or die("Lỗi không thể mở file");
        while(!feof($fn)) { // nếu chưa hêt dòng
          $item=fgets($fn);
           
          $fileToConvertArr=explode("\t",$item); // chuyển chuỗi thành mảng

          if(!empty($fileToConvertArr[0])){
            
        
      ?>
        <tr>

            <td><?=$fileToConvertArr[0];?></td>
            <td><?=$fileToConvertArr[1];?></td>

            <td><?=$fileToConvertArr[3];?></td>
            <td><?=number_format($fileToConvertArr[4],0,'.','.');?>đ</td>
            <td height="300">
                <img src="images/<?=$fileToConvertArr[5]?>" width="300" height="200" alt="">
            </td>
            <td>
                <button><a href="cart.php?id=<?=$fileToConvertArr[0];?>">Chọn mua</a></button>
            </td>

        </tr>

        <?php 
          };
        };
            fclose($fn); // đóng file ?>

    </tbody>
    </tbody>

</table>