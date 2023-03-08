<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $id=$_GET['id'];
   
    $connection = new PDO("mysql:host=127.0.0.1:3307;dbname=web_2002;charset=utf8", "root", "");
    $query="select * from users where id=$id";
    $stmt=$connection-> prepare($query);
    $stmt->execute();
    $user=$stmt->fetch();
    
?>

<body>
    <form action="save-update.php" method="post">
        <div>
            <input type="text" name="user-id" value="<?php echo $user["id"]?>">
        </div>
        <div>
            <input type="text" name="username" id="" value="<?php echo $user['username'] ?>">
        </div>
        <div>
            <input type="password" name="password" id="" value="<?php echo $user['password']?>">
        </div>
        <div>
            <input type="submit" name="btn-update" value="Cập nhật">
        </div>
    </form>
</body>

</html>