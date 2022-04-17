<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body class=" ">
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
               <div class="text-center mt-2 ">
                   <a href="login.php">
                       <button class="btn bg-primary text-white" style = 'width:200px'>Login</button>
                   </a>
               </div>

               <div class="text-center mt-2">
                   <a href="regester.php">
                       <button class="btn bg-success text-white" style = 'width:200px'>Regester</button>
                   </a>
               </div>

               <div class="text-center mt-2">
                   <a href="logout.php">
                       <button class="btn bg-danger text-white" style = 'width:200px'>Logout</button>
                   </a>
               </div>
            </div>
            <div class="col-6">
               <div class="card">
                   <div class="card-body">
                       Regester
                   <form action="" method = "POST">
                    <div class=" mb-3">
                        <label for="" >Name</label>
                        <input type="text" name = "name" class="form-control">
                    </div>

                    <div class=" mb-3">
                        <label for="">Email</label>
                        <input type="email" name = "email" class="form-control">
                    </div>

                    <div class=" mb-3">
                        <label for="">Password</label>
                        <input type="password" name = "password" class="form-control">
                    </div>

                    
                    <div class=" mb-3">
                        <label for=""> Confirm Password</label>
                        <input type="password" name = "confirmpassword" class="form-control">
                    </div>

                    <button type = "submit" class="btn bg-dark text-white float-end" name="register">Register</button>
                    
                </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
<?php
session_start();
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($name != "" && $email != "" && $password != "" && $confirmpassword != "") {
        if (strlen($password) >= 6 && strlen($confirmpassword) >= 6) {
            if($password == $confirmpassword) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

                 echo "Register Success";
            }else{
                echo "Password not same, Try Again!";
            }
        }else {
            echo "Password must be greater than 6";
        }
    }else {
        echo "Need to Faill!";
    }
}

   
?>
</html>