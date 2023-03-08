<?php 
  $id=$_GET['id'];
  echo $id;
  $connection = new PDO("mysql:host=127.0.0.1:3307;dbname=web_2002;charset=utf8", "root", "");
  $query="delete from  users where id=$id";
  $stmt=$connection->prepare($query);
  $stmt->execute();
  header('location:list-user.php');

?>