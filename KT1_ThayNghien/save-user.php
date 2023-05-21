<?php 
 include "./db.php";
      
   if(isset($_POST['btn'])){
    $id=$_POST['id'];
    echo $id;
    $name=$_POST['name'];
    $thang=$_POST['month'];
    $dau=$_POST['chiSoDau'];
    $cuoi=$_POST['chiSoCuoi'];
    echo $name.$thang.$cuoi.$dau;
    $sql = "UPDATE tblhousehold SET tenChuHo='$name', thang=$thang, chiSoDau=$dau, chiSoCuoi=$cuoi WHERE id=$id";
    $result = $connect->query($sql);
    
    echo $result;
    if($result){
        echo "<script>alert('Update Thành Công')</script>";
        echo "<script>window.location.href='index.php'</script>";
    

    }
   }
?>