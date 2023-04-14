 <?php 
   if(isset($_POST['btn'])){
      $n1=$_POST['n1'];
      
   }
   function snt($n){
     if($n<=1){
         return false;
     }
     for($i=2;$i<=sqrt($n);$i++){
        if($n%$i==0){
             return false;
        }
     }
     return true;
   }
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>

     <form action="bai3.php" method="post">
         <label for="">Moi nhap so nguyen</label>
         <input type="text" name="n1" value="<?php  if(isset($n1)) echo $n1; ?>"> <br> <br>
         <label for="">Cac so nguyen to</label>
         <input type="text" name="n2" value="<?php
           
            for($i=0;$i<=$n1;$i++){
                if(snt($i)){
                    echo $i." ";
                }
              } 
           
         
         ?>"> <br> <br>
         <button type="submit" name="btn">Tim</button>
     </form>
 </body>

 </html>