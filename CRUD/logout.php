<?php
session_start();
 if($_SESSION['name']=='admin12'){
 unset($_SESSION['name']);
 header("location:user.php");}else{
    unset($_SESSION['name']);
    header("location:index.php");
 }


?>