<?php 
 // làm viêc với file
 /*
   Dể mở 1 file ta dùng cú pháp :fopen($path,$option) .
   Trong đó $path đường dẫn file cần mửo
   $option là quyền  thao tác với file
   r: read only
   r+: read+write
   w: write only
   w+ : read+write:Nếu file này tồn tại thì nội dung cú sẽ  bị xóa đi
   và ghi lại nội dung mới ,còn nếu file chưa tôn tại nó sẽ tạo file mới
   a :
   a+ 
   kiểm tra file có tồn tại hay không sử dụng 
   file_exits($ten file)
   kiểm tra file có đc ghi hay không  is_writable
   đổi tên file  rename($ten file,ten muon đoi)
   copy file
   copy(ten file,ten file)
   xoa file unlinK(ten file)

 */
 $file=fopen("db.txt","r+") or die("Lõi");
 if($file){
     fwrite($file,"PHP");

 }



?>