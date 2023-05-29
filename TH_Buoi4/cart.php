<?php 
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $cart=isset($_SESSION['cart']) ? $_SESSION['cart'] :[];
    $file=fopen('hang.txt','r') or die("lỗi");
    while(!feof($file)){
        $item=fgets($file);
        $items=explode("\t",$item);
        $id1=$items[0];
        if($id1== $id){
            $name=$items[1];
            $price=$items[4];
            $qty=$items[3];
            if(array_key_exists($id1,$cart)){
                $cart[$id1]['qty']++;
            }else{
                
                $cart[$id1]=["id"=>$id1,"name"=>$name,"qty"=>$qty,"price"=>$price];
            }
        }
    }
    $_SESSION['cart']=$cart;
   
   
    header("location:view-data.php");
}

?>