  <?php require_once "connect.php";?>
  <?php
     session_start();
    if(isset($_POST['btn'])){

      $name=$_POST['name1'];
      $password=$_POST['password'];
      
      $sql="select * from member where name='$name' and password='$password'";
      $sqlCon=mysqli_query($connect,$sql);
      if(mysqli_num_rows($sqlCon)==0){
        $alert="Tên or mật khẩu không chính xác";
      }else{
        $result=mysqli_fetch_array($sqlCon);
        var_dump($result);
        if($result['id']==1){
          
          $_SESSION['name']=$name;
          header("location:user.php");
        }else{
            $_SESSION['name']=$name;
            header("location:header.php");
        }
        
      }
      
      
    }


  ?>

  <form action="singin.php" method="post">
      <h2>Đăng nhập</h2>
      <br>
      <span><?=isset($alert) ? $alert : ""?></span>
      <div class="mb-3">

          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" name="name1" id="exampleFormControlInput1"
              placeholder="name@example.com">

      </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
              placeholder="name@example.com">
      </div>
      <div class="mb-3">

          <input type="submit" class="form-control" name="btn" id="exampleFormControlInput1" value="Đăng nhập">
      </div>

  </form>