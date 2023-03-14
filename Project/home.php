<?php 
 require_once "connect.php";
 $sql="SELECT * FROM users";
 $queryUser=mysqli_query($connect,$sql);
 $errors=[];
if(!empty($_POST['btnPOST'])){
    $name=$_POST['name'] ?? "";
    $password=$_POST['password1'] ?? "";
    $sqlInsert="insert into users(username,password) values('$name','$password')";
    $queryUser=mysqli_query($connect,$sqlInsert);
    header("location:home.php");
    
}else{
    if(empty($name)){
        $errors['name']="Ten khong duoc de rong";
    }
    if(empty($password)){
        $errors['password']="mat khau khong duoc de rong";
    }else if(filter_var($password,FILTER_VARLIDATE_PASSWORD)){
        $errors['password']="khong dung dinh dang";
    }

}
 if(isset($_GET['id'])){
    $id=$_GET['id'] ?? "";
    $sqlDel="delete from users where id=$id";
    $queryUser=mysqli_query($connect,$sqlDel);
    header("location:home.php");
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
    <form action="home.php" method="post">
        <label for="">Username</label>
        <input type="text" name="name">
        <br>
        <label for="">Password</label>
        <input type="password" name="password1">
        <br>
        <input type="submit" value="Them" name="btnPOST">
        <br>
    </form>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($queryUser as  $user): ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['password'] ?></td>
                <td>
                    <a href="home.php=<?php echo $user['id'] ?>">Xóa</a>
                    <a href="home.php">Sửa</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>

</html>