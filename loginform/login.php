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

    <div class="container mt-5  ">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-5">
               <form action="" method="POST">
        
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name = "email" placeholder="Enter Your Email">
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name = "password" placeholder="Enter Your Password">
                </div>
                <a href="login.php">
                    <button class="btn btn-info text-white float-end" name = "loginbtn">LogIn</button>
                </a>
                <p>You don't have account <a href="register.php">Register</a></p> 
                <p>Log out your account <a href="logout.php">Click</a></p>
               </form>
            </div>
        </div>
    </div>
    
</body>
<?php
session_start();
 if(isset($_POST['loginbtn'])) {
     $userEmail = $_POST['email'];
     $userPassword = $_POST['password'];

     if($userEmail == $_SESSION['email'] && password_verify($userPassword , $_SESSION['password'])) {
         echo "login Success";
     }else {
          echo "Login Fail, Try Again";
     }
 }
?>
</html>