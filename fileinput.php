<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Store</title>
</head>
<body>
    <h3>File Store</h3> 
    <form action="" method = "POST" enctype = "multipart/form-data">
        <input type="file" name = "userProfile">
        <br> <br>
        <input type="submit" value = "Save" name = "storeProfile">
    </form>
</body>
<?php 
   if (isset($_POST['storeProfile'])) {

       $imgName = $_FILES['userProfile']['name'];
       $tmpName = $_FILES['userProfile']['tmp_name'];

      
       $target_file = 'image/' . $imgName;
       if (move_uploaded_file($tmpName , $target_file)) {
           move_uploaded_file($tmpName , $target_file);
           echo "success";
       }else{
           echo "error";
       }
   }
?>

</html>