<?php

require_once("connect.php");
session_start();


if(isset($_POST['submit'])){



    $name = $_POST["name"];
    if (empty($_POST["name"])) {
    
     echo '<script>alert ("name is required")</script>';
       }
   if (!preg_match("/[a-zA-Z- ]*$/",$name)) {
      //$nameErr = "Only letters and white space allowed";
      echo '<script> alert("Only letters and numbers are allowed") </script> ';
    }


    $password =$_POST["password"];
    if (empty($_POST["password"])) {
    
     echo '<script>alert ("password is required")</script>';
       }
    $sql="SELECT * from users where name ='$name' and password='$password'";
    $result = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result))
    {
        echo "Success";
        if ($row[4]==1) {
          $_SESSION["id"] = $row[0];
          $_SESSION["name"] = $row[1];
          header('Location: admin-panel.php');
        }
        else {
          $_SESSION["id"] = $row[0];
          $_SESSION["name"] = $row[1];
          header('Location: index.php');
        }
    }

    else{
        echo "<script> alert('invalid Username or Password')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</head>
<body class="myhome">
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <a class="navbar-brand" href="#">MIU HIKING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          More
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="login.php">Login</a></li>
          <li><a class="dropdown-item" href="register.php">Register</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="contactus.php">Contact Us</a></li>
        </ul>
      </li>
         
  </div>
</nav>
<div class="container">
<div class="jumbotron">
<form method="POST">
  <div class="form-group">
    <label>Name</label>
    <input name="name" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control">
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

</body>
</html>