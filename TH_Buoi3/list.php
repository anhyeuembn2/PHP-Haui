<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Khoa</th>
            <th>Miêu tả</th>

        </tr>
    </thead>
    <tbody>
        <?php 
        $fn=fopen("data.txt","r") or die("Lỗi không thể mở file");
        while(!feof($fn)) { // nếu chưa hêt dòng
          $item=fgets($fn); // lấy giá trị trê tunwgf dòng của file
          $fileToConvertArr=explode("\t",$item); // chuyển chuỗi thành mảng
          
          if(!empty($fileToConvertArr[0])){
            
        
      ?>
        <tr>
            <td><?=$fileToConvertArr[0];?></td>
            <td><?=$fileToConvertArr[1];?></td>
            <td><?=$fileToConvertArr[2];?></td>
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