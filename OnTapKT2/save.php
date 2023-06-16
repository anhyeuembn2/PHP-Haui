<?php 
include "./db.php";
 if(isset($_POST['btn'])){
     $id=$_POST['id'];
     $hoTen=$_POST['name'];
     $file_name="";
     if(isset($_FILES['file'])){
        $file=$_FILES['file'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],"./upload/$file_name");

     }
     $xepLoai=$_POST['xepLoai'];
     $luongNgay=$_POST['luongNgay'];
     $ngayCong=$_POST['ngayCong'];
     $sql="UPDATE nhanvien SET HoTen='$hoTen',HinhAnh='$file_name',XepLoai='$xepLoai',LuongNgay=$luongNgay,NgayCong=$ngayCong where MaNV='$id'";
     $kq=$connect->query($sql);
     if($kq){
        echo "<script>alert('Sửa thành công')</script>";
        echo "<script>window.location.href='index.php'</script>";
     }
 }
?>