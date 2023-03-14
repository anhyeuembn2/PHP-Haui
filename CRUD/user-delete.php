<?php require_once "connect.php"; ?>
<?php

  if(isset($_GET['id'])){
   $id=$_GET['id'] ?? "";
   $sqlDelete="delete from users where id=$id";
   $userDel=mysqli_query($connect,$sqlDelete);
   if($userDel){
      
      header("loaction:user.php");
   }else{
      
      header("location:user-delete.php");
   }
}

?>