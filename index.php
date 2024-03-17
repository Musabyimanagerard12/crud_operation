<?php
@include 'connect.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $insert = "INSERT INTO crud(username,email,mobile,password) VALUES('$username','$email','$mobile','$password')";
    $result = mysqli_query($con,$insert);

    if($result){
        header("location:display.php");
    }else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container my-5">
    <form action="" method="post">
        <h1>Registration</h1>
        <label for="username">Username</label><br>
        <input type="text" name="username" class="form-control" placeholder="Enter Username..."><br>
        <label for="email">email</label><br>
        <input type="email" name="email" class="form-control" placeholder="Enter email..."><br>
        <label for="mobile">Mobile</label><br>
        <input type="number" name="mobile" class="form-control" placeholder="Enter mobile..."><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" class="form-control" placeholder="Enter password...">
        <input type="submit" value="submit" name="submit" class="btn btn-primary mt-3">
    </form>
  </div>
    
</body>
</html>