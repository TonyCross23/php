<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deller</title>
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
<body class="bg-dark text-white">

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-5">
               <form action="" method="POST">
                <div class="mb-4">
                   
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name = "name" placeholder="Enter Your Name">
                </div>

                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name = "email" placeholder="Enter Your Email">
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name = "password" placeholder="Enter Your Password">
                </div>

                <div class="mb-4">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" class="form-control" name = "confirmpassword" placeholder="Confirm Your Password">
                </div>

                <a href="Register.php">
                    <button class="btn btn-info text-white float-end" name="register">Register</button>
                   
                </a>
                <p>You have already account <a href="login.php">SingIn</a></p> 
              
               </form>
            </div>
        </div>
    </div>
    
</body>
<?php
session_start();
function checkStrongPassword($password) {
    $upprerstatus = false;
    $lowerstatus = false;
    $numberstatus = false;
    $specialstatus = false;

    if(preg_match('/[A-Z]/', $password )){
        $upprerstatus = true;
    }

    if(preg_match('/[a-z]/', $password )){
        $lowerstatus = true;
    }

    if(preg_match('/[0-9]/', $password )){
        $numberstatus = true;
    }

    if(preg_match('/[!@#$%^&*]/', $password )){
        $specialstatus = true;
    }

    if($upprerstatus && $lowerstatus && $numberstatus && $specialstatus) {
        return true;
    }else{
       return false;
    }
    
    
}
 if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($name != "" && $email != "" && $password != "" && $confirmpassword != "") {
        if(strlen($password) >= 6 && strlen($confirmpassword) >= 6) {
            if($password == $confirmpassword) {
                $status = checkStrongPassword($password);
                if($status) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
    
                    echo "Register Success";
                }else {
                    echo "Your password is not stroing password, eg.(EXAMple12!@#)";
                }
              
            }else{
                echo "Password not same, Try Again!";
            }
        }else{
            echo "Password must be greater than 6!";
        }
    }else{
        echo "Need to faill!";
    }
 }
?>
</html>