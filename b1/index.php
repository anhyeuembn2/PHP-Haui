<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



  /* BIẾN 
     nó k bắt đầu bằng số, và nó phân biệt chữ hoa và thường
     có thể trùng tên với keyword
     biến luôn luôn bắt đầu bằng chữ cái or gạch chân _

    */
  $name = "Trieu";

  /* HẰNG
     - là đại lượng chứa giá trị
     không thể thay đổi được
    */
  const PI = 3.14;
  define('NAME', 'HAI_TRIEU');
  /*  CÁC KIỂU DỮ LIỆU
     interger,boolean,float,double,String,object,array
    
    */
  /*  biểu thức và toán tử
     biểu thức :tập hợp các toán tử và toán hạng
     toán tử :+ - * /
     toán hạng :là những giá trị mà nó thực hiện phép toán
    

     + TOÁN TỬ GÁN :+=,-= ,*=,/=
     + TOÁN TỬ QUAN HÊ : >= != <= ==
     + TOÁN TỬ LOGIC && || !
    
    */
  /*  CÂU LỆNH RẼ NHÁNH  
      - Form dùng if một mình
      -Form dùng if else 
      - Form dùn if else if
      -dùng toán tử 3 ngôi
      -dùng toán tử ??
      - dùng toán tử <=>
      -dùng switch case

    */
  $title = "Product A";
  $price = 500;
  /* học về hàm
       cú pháp khai báo
       function tenHam(thamSo){
         khoi lenh
         return value;
       }
       - CÁC KIỂU FUNC TRONG PHP
        + hàm không có tham số và không có giá tri trả về
     */

  function showMessage($mess = "check")
  {
    $result = '';
    if ($mess == "check") {
      $result = 'check';
    } else {
      $result = 'none';
    }
    echo $result;
  }

  /* PHẠM VI CỦA BIẾN
       biến cục bộ và biến toàn cục và biến tĩnh
       - biến cục bộ  là biến được định nghĩa bên trong func
       phạm vi hoạt động bên trong hàm
       -biến toàn cục là biến đinh nghĩa ngoài hàm 
       phạm vi hoạt động toàn chương trình
       phải sử dụng global để lấy đc giá trị
       -biến tĩnh là các biến có định trong hàm
       các giá trị của biến được lưu lại trong bộ nhớ
     
     */
  /* CHUỖI
     nếu sử dụng '' để khai báo chuỗi mà bên trong có ""  thì sẽ không bị j
     nếu sử dụng "" để khai báo chuỗi mà bên trong có "" thì ta sử dung \\
      nối chuỗi sử dung .
      nếu không muốn sử dụng ta có thể sử dung {}
    */
  /* CÁC HÀM XỬ LÝ VỚI CHUỖI
    explode (tham số 1, tham số 2) chuyển chuỗi thành mảng
    tham số 1 : ký tự tách chuỗi
    tham số 2 : tên cửa chuỗi muốn tách
     hàm var_dump hiển thị thông tin của biến ,mảng bao gồm kiểu dữ liệu và biến
     implode (tham số 1, tham số 2)
     tham sô 1 : kí tự giữa các phần tử
     tham số 2: mảng mà mình muốn chuyển
     strlen(str) để lấy ra độ dài của chuỗi
     str_word_count đếm số từ trong 1 chuỗi
     str_replace(tham số 1,tham sô 2,tham sô 3)
     tham số 1 :chuỗi cần tìm
     tham sô 2: chuỗi thay thế
     tham sô 3 :Chuỗi gốc
     htmlentities (chuỗi)  chuyển đổi các thẻ  html sang dạng chuỗi
     html_entity_decode (chuỗi) chuyển chuỗi sang dạng HTML
     strstr(tham só 1,tham số 2 ,tham số 3)
     tham sô 1: chuỗi gốc
     tham số 2 :kí tự muốn tách
     tham số 3:true/false
     tách một chuỗi bắt đầu từ kí tự muốn tách đến cuỗi chuỗi
     nêu là true thì sẽ tách từ kì tự muốn tách đếnn đầu và ngược lại
     strToLower chuyển hoa thành thường
     strToUpper chuyển thường thành hoa
     strpos(chuỗi gốc,chuỗi muốn tìm) trả về vị trí muốn tìm
     nếu k tìm thấy trả về false
     trim(chuỗi gốc,kí tự muốn xóa)

         */
  /* MẢNG 
           mảng thông thường
           mảng định danh
         một số hàm xử lý với mảng
         array_unshift(tên mảng,giá trị 1...) thêm phần tử vào đầu mảng
         array_push(tên mảng, giá trị muốn thêm) thêm phần tử vào cuối mảng
         thêm phần tử vào vị trí bất kì array_splice(tên mảng,vị trí muốn thêm,số phần tử muố xóa tính từ vị trí thêm,giá tri thêm)
         hàm này có thể sử dụng để thêm sửa xóa
         xóa phần tử cuỗi cung array_pop
         xóa phần tử dầu tiên array_shift
         xóa phần tư ở vị trí bất kì unset(tên mảng[key])
        
        */
  /*
        $product=array("Sam sung","Iphone 14","Xiao Mi");
        echo "<pre/>";
        var_dump($product);
        
        $newProduct=array(
            "apple"=> "Iphone 12",
            "samsung"=> "SamSung galaxy",
            "Xaio"=> "Xiao 12"
        )
        echo "<pre/>";
        var_dump($newProduct);
    echo "<br/>";
    $string3="Toi la Trieu";
  
    var_dump(explode(" ",$string3));
    echo "<br/>";
    echo implode(" ",array("xin","chao","viet","nam"));
    echo "<br/>";
    echo str_word_count($string3);
   */
  echo "<br/>";
  $numbers = array(1, 2, 3, 4, 5);



  /* xử lỹ FORM 
   DỮ liệu truyền lên server GET,POST
   get gửi dữ liệu lên thông qua phương thức get bằng ccash bổ sung các tham sô sau URL
   server sẽ nhận URL sẽ phân tich và trả về KQ
   dữ liệu cần bào mật nên dùng Get vì nó hiển thị lê URL
   thông thuowg những hành động nào làm thay đỏi DB thì k sử dung get
   2.lay dữ liệu
   $_GET là biến toàn cục lưu trữ tất cả dữ liệu từ client gửi lên server
   $_GET là 1 mảng định danh
   dùng isset() để kiểm tra sự tồn tại
   3. PHUONG THỨC POST dữ liệu gửi lên sẽ bị ẩn đi
   cũng có $_POST
 */
  echo "<pre/>";
  var_dump($_GET);

  ?>
    <form action="info.php" method="GET">
        <div>
            <input type="text" name="Product Name" id="product-name" placeholder="Producr Name">
            <div>
                <input type="text" name="Quantity" id="quantity" placeholder="Quantity">
            </div>
            <div>
                <input type="submit" name="btnSubmit" value="Thêm">
            </div>
        </div>
    </form>
</body>

</html>