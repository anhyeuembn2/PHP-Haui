<?php require_once "connect.php"; ?>
<?php 
 if(isset($_GET['id'])){
  $id=$_GET['id'] ?? "";
  echo $id;
  $sqlDelete="delete from users where id=$id";
  $userDel=mysqli_query($connect,$sqlDelete);
  header("location:user.php");
 }
  

?>