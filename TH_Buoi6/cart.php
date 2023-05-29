<?php
   include "./db.php";
   session_start();
   
   if(isset($_POST['id'])){
      $id = $_POST['id'];
      $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
      $sql = "SELECT * FROM tblproduct WHERE id = $id";
      $result = $connect->query($sql);
      $qty = isset($_POST['qty']) ? $_POST['qty'] : 1;
      echo $qty;

      $productItem = mysqli_fetch_array($result, MYSQLI_ASSOC);

      $item = [
         'id' => $productItem['id'],
         'name' => $productItem['name'],
         'image' => $productItem['image'],
         'price' => $productItem['price'],
         'qty' => $qty
      ];

      if(array_key_exists($id, $cart)){
         $cart[$id]['qty']++;
      } else {
         $cart[$id] = $item;
      }

      $_SESSION['cart'] = $cart;
   }
?>