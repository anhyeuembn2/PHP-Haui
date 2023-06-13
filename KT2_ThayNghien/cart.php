<?php
include "./db.php"; 
  session_start();
  if(isset($_GET['id'])){
    $cartItem=!empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
    $id=$_GET['id'];
     $sql="select * from tblproduct where id=$id";
     $result=$connect->query($sql);
     $items=mysqli_fetch_array($result);
     $item=[
        "id"=>$items['id'],
        "name"=>$items['tenHang'],
        "qty"=>1,
        "price"=>$items['price']
     ];
     echo "<pre/>";
     print_r($item);
     if(array_key_exists($id,$cartItem)){
        $cartItem[$id]['qty']++;
     }else{
        $cartItem[$id]=$item;
     }
     $_SESSION['cart']=$cartItem;
     header("location:view-cart.php");
     

  }
?>