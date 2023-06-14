<?php
session_start();
include "./db.php";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from tblitems where id=$id";
    $kq=$connect->query($sql);
    $item=mysqli_fetch_array($kq);
    echo "<pre/>";
   
    $cart=!empty($_SESSION['cart']) ? $_SESSION['cart'] :[];
    $items=[
        "id"=>$item['id'],
        "name"=>$item['name'],
        "qty"=>$item['qty'],
        "price"=>$item['price']
    ];
    if(array_key_exists($id,$cart)){
        $cart[$id]['qty']++;
    }else{
        $cart[$id]=$items;
    }
    $_SESSION['cart']=$cart;
    header("location:view-cart.php");
  }
?>