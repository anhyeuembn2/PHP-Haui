<?php 
session_start();
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $cart=isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    $file=fopen("hang.txt",'r') or die("Không thể mở file");
    while(!feof($file)){
        $item=fgets($file);
        $arr=explode("\t",$item);
        $ids=$arr[0];
        if($id==$ids){
            $name=$arr[1];
            $price=$arr[4];
            if(array_key_exists($ids,$cart)){
                $cart[$ids]['qty']++;
            }else{
                $cart[$ids]=["id"=>$ids,"name"=>$name,"qty"=>1,"price"=>$price];
            }

        }
    }
    $_SESSION['cart']=$cart;
    header("location:view-data.php");
 }
?>