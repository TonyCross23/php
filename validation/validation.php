<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<?php
$errorName = $errorEmail = $errorPhone = $errorAdress = "" ;
$name = $email = $phone = $address = "" ;
 if(isset($_POST['btnSave'])) {
     if($_POST['name'] == null ||$_POST['name']  == "" || empty($_POST['name'])) {
        $errorName = "Please  fill";
     }else {
         $name = $_POST['name'];
     }

    if($_POST['email'] == null || $_POST['email'] =="" || empty($_POST['email'])) {
        $errorEmail = "Please  fill";
     }else {
         $email = $_POST['email'];
     }

     if($_POST['phone'] == null || $_POST['phone'] == "" || empty($_POST['phone'])) {
        $errorPhone = "Please  fill";
     }else {
         $phone = $_POST['phone'];
     }

     if($_POST['address'] == null || $_POST['address'] == "" || empty($_POST['address'])) {
        $errorAddress = "Please  fill";
     }else {
         $address = $_POST['address'];
     }

     if($name != "" && $email != "" && $phone != "" && $address != "" ) {
         echo $name . "<br>";
         echo $email . "<br>";
         echo $phone . "<br>";
         echo $address . "<br>";
     }
    
    
 }
?>
<body class="bg-dark text-white-50">
    <div class="container mt-5my-3 px-5">
        <div class="row">
            <div class="col-6 offset-3 shadow">
                <form action="" method="POST" >
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input type="text" class="form-control"  name= "name" placeholder="Enter Your Name">
                        <small class = "text-danger"><?php echo $errorName;?></small>
                    </div>

                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name = "email" placeholder="Enter Your Email">
                        <small class = "text-danger"><?php echo $errorEmail;?></small>
                    </div>

                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" name = "phone" placeholder="Enter Your Phone">
                        <small class = "text-danger"><?php echo $errorPhone;?></small>
                    </div> 
                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <textarea  class="form-control" name = "address" cols="30" rows="10" placeholder="Enter Your Address" ></textarea>
                        <small class = "text-danger"><?php echo $errorAddress;?></small>
                    </div>

                    <div class="my-3 px-5  float-end">
                       <input type="submit" name = "btnSave" value="Save" class="btn btn-success text-white ">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>