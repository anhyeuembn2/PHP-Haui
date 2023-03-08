<?php 
   $username=$_POST["username"];
   $password=$_POST["password"];
   $connection=new PDO("mysql:host=127.0.0.1:3307;dbname=web_2002;charset=utf8", "root", "");
   $query="insert into users(username,password) values ('$username','$password')";
   $stmt=$connection->prepare($query);
   $stmt->execute();
   header('location:list-user.php');
?>