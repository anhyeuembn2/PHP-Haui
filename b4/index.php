<?php 
 // gettype lay ra kieu du lieu cua bien
 // settype($ten_bien,kieu_du lieu)
 // hoc ve mang 1 chieu
 $course=array("JS","HTML5","CSS3","ReactJS");
 echo "<pre/>";
 var_dump($course);
 echo "<br/>";
 $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"20");
 echo "<pre/>";
 var_dump($age);
 $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo "<pre/>";
  var_dump($cars);
 // array_keys() liet ke key trong mang
 // array_keys_exits() kiem tra key co ton tai trong mang hay khong
 // count trả về sô phần tử trong mảng
 // array_change_key_case() chuyên mang thanh chu hoa or thuogng (CASE_UPER,CASE_LOWER)
 // array_chunk(tham so 1,tham so 2,tham so 3)
 /*
 tham so 1 :ten mang
 tham so 2: so phan tu muon co
 tham so 3 :true/false  neu la true se la lay ra key-> value
 con false se la index-value
array_colum(tenmang,tencot) và tạo ra 1 mang moi chua cac value cua ten cot
array_diff(mang1,mang2) tra ve gia tri khac khi so sanh value
array_diff_key(mang1,mang2) tra ve gia tri khac khi so snah value
array_diff_assoc()) tra ve gia tri khac khi so sanh key va value
array_diff_uassoc() tra ve gia tri 
 */
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
// array_filter sủ dụng callback dung de loc
function test_odd($var)
  {
  return $var%2==0;
  }

$a1=array(1,3,2,3,4);
// array_map dẻ tao ra mang moi
print_r(array_filter($a1,"test_odd"));
// array_pad() dung de them phan tu (mang,so phan tu muon them,gia tri them)
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
// array_splice(mag1,start,lenth,mang2) co the dung de them sua xoa theo index
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,2,1,$a2);
print_r($a1);




?>