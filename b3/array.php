<?php 
 /*
  MẢNG PHP
   cú pháp để khởi tạo mảng
   $mang=array(key=> value);
   $mang2=[];
   dùng foreach để duyệt mảng


 */
 $fruits=['cam','quýt','dua','le'];
 $fruits2=array('cam','quyt','le','tao');
 echo "<pre/>";
 print_r($fruits);
 echo "<pre/>";
 print_r($fruits2);
// mảng không tuần tự
$inforStudent=array(
  'id'=>1, 
  'name'=>'Trieu',
  'age'=> 20,
  'email'=>'trieu@gmail.com'

);
print_r($inforStudent);
// khai báo mảng đa chiều
// duyệt qua tất cả các phần tử mảng
$arrNumber=[1,2,3,4,5,6,7,8,9];
foreach($arrNumber as $key=> $value){
   echo "index -{$key} | value : {$value}";

}
$sport=[];
// bổ sung các phần tử 
$sport['name']=['tennis','football','chess'];
$sport['place']=['USA'];
echo "<pre/>";
print_r($sport);
$rooms=[
    [
        'id'=> 101,
        'name'=>"Văn tí",
        'leader'=>"Trg phong",
        'date'=>'2020-06-12'
    ],
    [
        'id'=>102,
        'name'=>'Văn teo',
        'leader'=>'bao ve',
        'date'=> '13-08-2003'
    ],
    [
        'id'=>103,
        'name'=>'Nguyen van A',
        'leader'=> 'Nhan vien',
        'date'=>'20-09-2006'
    ],
    [
        'id'=>104,
        'name'=> 'Nguyen Van B',
        'leader'=>'hanh chinh',
        'date'=>'10-06-2001'
    ]
    ];
    echo "<pre/>";
    print_r($rooms);

?>