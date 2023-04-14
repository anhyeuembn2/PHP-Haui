<?php
// mang k tua tu
  $inforName=[
      "inforOne"=>[
          "id"=>1,
          "fullName"=>"Nguyễn Văn Nam",
          "address"=>"Thái Bình",
          "gender"=>"Nam",
          "year"=>3002

      ],
      "inforTwo"=>[
        "id"=>2,
        "fullName"=>"Nguyễn Văn Nam",
        "address"=>"Thái Bình",
        "gender"=>"Nam",
        "year"=>3002

    ],
    "inforThree"=>[
        "id"=>3,
        "fullName"=>"Nguyễn Văn Nam",
        "address"=>"Thái Bình",
        "gender"=>"Nam",
        "year"=>3002

    ],
    "inforfour"=>[
        "id"=>4,
        "fullName"=>"Nguyễn Văn Nam",
        "address"=>"Thái Bình",
        "gender"=>"Nam",
        "year"=>3002

    ],
    "inforFive"=>[
        "id"=>5,
        "fullName"=>"Nguyễn Văn Nam",
        "address"=>"Thái Bình",
        "gender"=>"Nam",
        "year"=>3002

    ],
];
 echo "<pre>";
 print_r($inforName);
 // cau lenh print_r or var_dump

?>
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
    border-collapse: collapse;
    border: 1px solid black;
    /* Thêm style border cho table */
    width: 100%;
    /* Đặt chiều rộng của bảng là 100% */
}

th,
td {
    border: 1px solid black;
    /* Thêm style border cho th, td */
    padding: 10px;
    /* Thêm khoảng cách giữa nội dung và đường viền của các ô */
    text-align: center;
    /* Căn giữa nội dung trong các ô */
    /*  tenmang as tenbine*/
}
</style>

<body>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Quê quán</th>
                <th>Giói Tính</th>
                <th>Năm sinh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($inforName as $item) :?>
            <tr>
                <td><?= $item['id']?></td>
                <td><?php echo $item['fullName']?></td>
                <td><?php echo $item['address']?></td>
                <td><?php echo $item['gender']?></td>
                <td><?php echo $item['year']?></td>
            </tr>

            <?php endforeach ; ?>
        </tbody>
    </table>
</body>

</html>