<?php 
 if(isset($_POST['btnLogin'])){
    $user=$_POST['user'] ?? " ";
    $user=strip_tags($user);
    $pass=$_POST['password'] ?? " ";
    $pass=strip_tags($pass);
    echo $user.$pass;
 
    if(empty($user) || empty($pass)){
         header("location:error.php");
    }else{
        $file=fopen("database.txt","r");
        
           $dataFile=fread($file,filesize('database.txt'));
           fclose($file);
           echo $dataFile;
        $arrInfo=explode(";",$dataFile);
        echo "<pre/>";
        print_r($arrInfo);
        if(!empty($arrInfo)){
            if($user==$arrInfo[0] && $pass==$arrInfo[1]){
                 header("location:home.php");
            }else{
                header("location:err.php");
            }
        }
    }
    
 }


?>