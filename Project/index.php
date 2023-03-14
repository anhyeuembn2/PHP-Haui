<?php include_once 'header.php' ;

$error=[];
if(!empty($_POST['btnSubmit'])){
    $name=$_POST['name'] ?? "";
    $password=$_POST['password'] ?? "";
    if(empty($name)){
        $error['name']="Ten khong duoc de trog";
    }
    if($empty($password)){
        $error['password']="Mat khau khong duoc de trong";
    }else if(filter_var($password,FILTER_VALIDATE_EMAIL)){
             
    }
    if(!$error){
        echo "Thanh cong";
    }
}


?>

<div class="container mt-4">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-6">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <h2>Form Title</h2>
        <form class="row g-3 needs-validation" novalidate>
            <?php if($error) : ?>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                <input name="nameFile" type="file" class="form-control" id="validationCustom01" required>
                <?php foreach($error as $err) : ?>
                <span style="background:red"><?php echo $err['name'] ?></span>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif;?>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="password" name="password" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>





            <div class="col-12 mt-4">
                <button class="btn btn-primary" type="submit" name="btnSubmit">Submit form</button>
            </div>
        </form>
    </form>

</div>
<?php include 'footer.php' ;?>