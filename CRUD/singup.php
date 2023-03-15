<?php require_once "connect.php" ;?>

<?php
 if(isset($_POST['btnDK'])){
    $name=$_POST['name1'] ?? "";
    
    $query="select * from member where name='$name'";
    $result=mysqli_query($connect,$query);
    if(mysqli_num_rows($result)!=0){
         $alert="Ten da bi trung ";
    } else{
        $password=$_POST['password'] ?? "";
        $fullname=$_POST['fullname'] ?? "";
        $address=$_POST['address'] ?? "";
        $query1="insert into member(name,password,fullname,address) values('$name','$password','$fullname','$address')";
        $result1=mysqli_query($connect,$query1);
        
        echo "<script>alert('Dang ki thanh cong');location='singin.php'</script>";
    }  


}

    


?>

<form action="singup.php" method="post">
    <section>
        <h1><?=isset($alert) ? $alert : ""?></h1>
        <label for="">Name</label>
        <input type="text" name="name1">
    </section>
    <section>
        <label for="">Password</label>
        <input type="password" name="password">
    </section>
    <section>
        <label for="">Repassword</label>
        <input type="password" name="repassword">
    </section>
    <section>
        <label for="">FullName</label>
        <input type="text" name="fullname">
    </section>
    <section>
        <label for="">Address</label>
        <input type="text" name="address">
    </section>
    <section>
        <input type="submit" value="Dang ki" name="btnDK">
    </section>


</form>