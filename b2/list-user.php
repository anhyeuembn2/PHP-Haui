<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<style>
table {
    width: 50%;

}

th {
    background-color: black;
    color: #fff;
}
</style>

<body>
    <?php
    $connection = new PDO("mysql:host=127.0.0.1:3307;dbname=web_2002;charset=utf8", "root", "");
    /*
       PDO là PHP Data Object là 1 class cung cấp cặp phương thức để kết nối với DB
       -> truy cập vào phương thức
       prepare pthuc chuẩn bị 1 câu lệnh SQL
       */
    $query = "select * from users";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $user = $stmt->fetchAll();
    // echo "<pre/>";
    // var_dump($user);
    ?>
    <div>Thông tin tài khoản</div>
    <a href="add-user.php">Thêm mới Username</a>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($user as $item) : ?>

            <tr>
                <td><?php echo $item["username"] ?></td>
                <td><?php echo $item["password"] ?></td>
                <td>
                    <a href="update-user.php?id=<?php echo $item['id'] ?>">Sửa</a>

                </td>
                <td>
                    <a onclick="confirm('Bạn chắc chắn muốn xóa ?')"
                        href="delete-user.php?id=<?php echo $item['id'] ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</body>

</html>