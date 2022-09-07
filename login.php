<?php

$host = "localhost";
$username = "root";
$passwordx = "";
$dbname = "Tamakan";
$con = mysqli_connect($host, $username, $passwordx, $dbname) or die('Error in Connecting: ' . mysqli_error($con));

if(isset($_POST['submit'])){

    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$user_email' AND passwordd ='$user_password'";

    $query = mysqli_query($con,$sql);

    if($query){

        if(mysqli_num_rows($query)==1){ 
          
            echo'<script> location.href = "index.php"; </script>';
            
        }else{
            echo '<script>alert("Incorrect email or password !");</script>';
        }
    }else{
        echo '<script>alert("Something went wrong !");</script>';
     }
    }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form action="login.php" method="post">
<div>
             <img src="Images/Tamakan logo.jpeg" alt="Tamakan logo " class="mx-auto d-block" style="width:30%">
</div>
             <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" name="email" id="email" required>
</div>

<p></p>
<div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" name="password" id="pwd" required>
</div>
                <p></p>
                <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                <p></p>
                <div class="form-group">

                <a href="register.php"><h4 class="text-primary">Create New Account</h4></a>
</div>
       
</form>
</div>
</body>
</html>
