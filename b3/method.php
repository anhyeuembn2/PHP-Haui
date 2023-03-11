<?php 
 $id=isset($_GET['id']) ? $_GET['id'] :0;
 $age=$_GET['age'] ?? 0;
 $email=$_GET['email'] ?? '';
 echo "id - {$id} - age - {$age} - email - {$email}";

 /*
  SỰ KHÁC NHAU GIỮA POST VÀ GET
  get dữ liệu gửi đc hiển thi ngay lên thanh URL và lưu vào history trình duyệt
  còn post dữ liệu gửi ngầm đi và kh lưu
  post bảo mật hơn khi chúng ta muốn che dấu dữ liệu khi gửi lên server
  get giới hàn dung luowg còn post thì k


 */
?>