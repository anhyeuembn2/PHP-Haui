<?php require_once "connect.php";?>
<?php require_once "header.php";?>

<?php 
  if(isset($_GET['id'])){
    $id=$_GET['id'] ?? "";
    $sqlUpdate="select * from users where id=$id";
    $userUpdate=mysqli_query($connect,$sqlUpdate);
    $userData = mysqli_fetch_assoc($userUpdate);
    

  }
?>

<div class="container mt-4">
    <form action="save-user.php" method="POST">
        <div class="col-md-4">
            <label for="" class="form-label">Email address</label>
            <input type="text" class="form-control" name="id" value="<?php echo $userData['id'] ?>"
                placeholder="name@example.com" />
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" value="<?php echo $userData['username'] ?>"
                placeholder="name@example.com" />
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <input class="form-control" name="password" type="password" value="<?php echo $userData['password'] ?>"
                id="exampleFormControlTextarea1" />
        </div>
        <div class="col-md-2 mt-4">
            <button class="btn btn-success" type="submit" name="btnAdd">Sửa User</button>
            <button class="btn btn-primary">Quay lại</button>
        </div>
    </form>
</div>