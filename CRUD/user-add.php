<?php require_once "header.php";

  

?>
<?php require_once "connect.php";?>
<?php 
 if(isset($_POST['btnAdd'])){
    $name=$_POST['email'] ?? "";
    $password=$_POST['password'] ?? "";
    $sqlInsert="insert into users(username,password) values('$name','$password')";
    $userAdd=mysqli_query($connect,$sqlInsert);
   
    header("location:user.php");
 }


?>
<div class="container mt-4">
    <form action="user-add.php" method="post">
        <div class="col-md-4">
            <label for="" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" id="" placeholder="name@example.com">
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <input class="form-control" name="password" type="password" id="exampleFormControlTextarea1" />
        </div>
        <div class="col-md-2 mt-4">
            <button class="btn btn-success" type="submit" name="btnAdd">Thêm mới</button>
            <button class="btn btn-primary">Quay lại</button>
        </div>
    </form>
</div>