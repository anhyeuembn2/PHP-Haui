<?php require_once "header.php"; ?>
<?php require_once "connect.php";

$sql = "SELECT id, username, password FROM users";

// Set default page to 1 if not specified in GET parameter
$page = isset($_GET['page'])?  $_GET['page'] :1;
$search=isset($_GET['search']) ? $_GET['search'] : "";
echo $page.$search;
// Calculate the total number of records and pages
$totalResult = mysqli_query($connect, "SELECT COUNT(*) FROM users"); // lay ra tong so hang trong bang
$count = mysqli_fetch_array($totalResult)[0];
$limit = 4; // Number of records per page
$totalPages = ceil($count / $limit); // tinh ra so trang




// Calculate the offset for the current page
$offset = ($page - 1) * $limit;

// Add search filter if specified in GET parameter
if (!empty($_GET['search'])) {
    $search = mysqli_real_escape_string($connect, $_GET['search']); 
    $sql .= " WHERE username LIKE '%$search%' ";
}

// Add limit and offset to the query
$sql .= " LIMIT $offset, $limit";

$userSql = mysqli_query($connect, $sql);

if (!$userSql) {
    die('Query error: ' . mysqli_error($connect));
}

$users = mysqli_fetch_all($userSql, MYSQLI_ASSOC);



?>
<div class="container mt-5">
    <form action="user.php" method="GET">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="search" style="width:50%;height:40px">
                <button class="btn btn-primary">Tìm kiếm</button>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button class="btn btn-success">
                    <a href="user-add.php" style="text-decoration:none;color:white">Thêm mới</a>
                </button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th colspan="2" col>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) :?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['password'] ?></td>
                <td>
                    <button class="btn btn-danger">
                        <a href="user-delete.php?id=<?php echo $user['id'] ?>" style="text-decoration:none;color:white"
                            onClick="return confirm('Bạn chắc chắn muốn xóa ?')">Xóa</a>
                    </button>
                    <button class="btn btn-warning">
                        <a href="user-update.php?id=<?php echo $user['id'] ?>"
                            style="text-decoration:none;color:white">Sửa</a>
                    </button>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="user.php?page=<?=$page<=1 ? 1 : $page-1 ?> " aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i=1;$i<=$totalPages;$i++):?>
            <li class="page-item">
                <a class="page-link"
                    href="user.php?page=<?php echo $i?><?php echo ($search!="") ? "&search=$search" : ""?>"
                    aria-label="Previous">
                    <?php echo $i?>
                </a>
            </li>

            <?php endfor ;?>
            <li class="page-item">
                <a class="page-link" href="user.php?page=<?=$page>=$totalPages ? $page : $page+1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>