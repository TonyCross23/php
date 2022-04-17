<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash</title>
</head>
<body>
    <h3>Form</h3>
    <form action="" method="POST">  
    Email<input type="email" name = "userEmail" > <br><br>
    Password<input type="password" name="userPassword"> <br><br>
    <input type="submit" value="LogIn" name = "Btn">
    </form>
</body>
<?php

$email = 'admin@gmail.com';
$password = 'admin123';





if (isset($_POST['Btn'])) {
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPassword'];

    if($email == $userEmail && $password == $userPass) {
        echo "Login Success";
    }else{
        echo "Login Fail , Try again....";
    }
  
}

?>
</html>