<?php
  require_once "connect.php";

?>
<?php 
  $id=$_POST['id'] ?? "";
  
  echo $id;
  $email=$_POST['email'] ?? "";
  echo $email;
  $password=$_POST['password'] ?? "";
  echo $password;
  $sqlUpdate="Update users set username='$email',password='$password' where id='$id'";
  $userInto=mysqli_query($connect,$sqlUpdate);
  header("location:user.php");
  
?>