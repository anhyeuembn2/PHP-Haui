<?php
  include "./db.php";
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from nhanvien where MaNV='$id'";
    $kq=$connnect->query($sql);
    if($kq){
        echo "<script>alert('Xóa thành công')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
 }
?>