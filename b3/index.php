<?php 

  // thông báo thôi khi sử dụng PHP 7.0 trở lên
  /*
  biến toàn cục và biến cục bộ
  biến toàn cục:có thể sử dụng trong toàn chương trình
  biến cục bô: chỉ có thể sử dụng bên trong func


  */
  $hello="Hello";
  function getHello(){
     global $hello;
     $goodbye="googbye";
     echo $hello. $goodbye;
  }
  getHello();
  echo "<br/>";
  /// học về khai báo biến static
  /*
  khai báo 1 biến static biến sẽ dc lưu lại giá trị sau mỗi lần gọi hàm

  */
  /*
    HỌC VỀ CHUỖI
    toán tử nối chuỗi (.)
   sử dụng biến trong chuỗi {$tenBien}-bắt buộc sử dụng ""
  */
  
  $test="đang học php cơ bản";
  $test2="đang học oop php";
  $test3=$test.$test2;
  $test4="học xong {$test}";
  echo $test4;
  echo $test3;
  /*
   CÁC HÀM XỬ LÝ VỚI CHUỖI
   explode ($ten chuỗi,tham sô2)
   trong đó :tham số 1 vị trí để chuyển thành mảng
   tham sô 2 :tên chuỗi để chuyển
    implode(tham soo1 ,tham số 2) chuyển mảng thành chuỗi
    strlen đếm kí tự nằm trong chuỗi
    str_word_count:đếm sớ từ trong chuỗi
    str_repeat($str,số lần muốn lặp)
    str_replace(tham soo1 ,tham số 2,tham số 3)
    tham sô 1:chuỗi cần tìm
    tham sô 2:chuỗi thay thế
    tham sô 3:chuỗi gốc
    md5 mã hóa thành 32 kí tự
    htmlentities chuyển đổi thẻ html sang chuỗi
    html_entity_decode chuyển chuoix thành thẻ hTML
    strToUpper chuyển thg thành hoa
    strLower chuyển hoa thành thường
    trim(chuoc hoc,ki tu muon bo)
    strstr(tham sô 1,tham số 2,tham sô 3)
    tham sô 1: chuỗi gốc
     tham số 2 :kí tự muốn tách
     tham số 3:true/false
     tách một chuỗi bắt đầu từ kí tự muốn tách đến cuỗi chuỗi
     nêu là true thì sẽ tách từ kì tự muốn tách đếnn đầu và ngược lại
     strpos  tìm kiếm vj trí của phàn tử
     substr căt chuỗi
  */
  $str="chuyen mang thanh chuoi";
  $array=explode(" ",$str);
  var_dump($array);
  $newFruits=implode(" ",$array);
  echo $newFruits;
  echo "<br/>";
  $str2="học php";
  echo mb_strlen($str2);
  echo "<br/>";
  echo str_word_count($str2);
  echo str_repeat($str,5);
  $newStr=str_replace("php","js",$str2);
  echo $newStr; 
  $password='12345678';
 echo "<br/>";
 $fullName="Nguyen Hai Trieu";
 $lastName = substr($fullName, 0, strpos($fullName, " "));
 $firstName = substr($fullName, strrpos($fullName, " ") + 1);
$middleName = substr($fullName, strlen($lastName) + 1, strlen($fullName) - strlen($firstName) - strlen($lastName) - 2);
echo $lastName;

  
?>