<?php

require_once("connect.php");


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

    $email = $_POST["email"];
     if (empty($_POST["email"])) {
    
     echo '<script>alert ("email is required")</script>';
       }
      
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
      echo '<script>alert ("invalid email format")</script>';
    }


    $phone = $_POST["phone"];
     if (empty($_POST["phone"])) {
    
     echo '<script>alert ("phone is required")</script>';
       }
      if (!preg_match("/[a-zA-Z- ]*$/",$name)) {
      //$nameErr = "Only letters and white space allowed";
      echo '<script> alert("Only numbers are allowed") </script> ';
    }

    $claim=0;
    $sql="INSERT INTO users(name,password,email,claim,phone) values('$name','$password','$email','$claim','$phone')";
	$result = mysqli_query($conn,$sql);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>
<body class="register">

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
    <center>
<h1 class="ml2">Welcome to MIU Hiking</h1>
</center>

    <div class="jumbotron">
<form method="POST">
  <div class="form-group">
    <label>Name</label>
    <input name="name" id="username" type="text" class="form-control" placeholder="Enter Your Name" minlength="6"  maxlength="10" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control" placeholder="Enter Your Password" minlength="6" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input name="email" type="email" class="form-control" placeholder="Enter Your Email" required>
  </div>

  <div class="form-group">
    <label>Phone</label>
    <input  onkeypress="return onlyNumberKey(event)" name="phone" type="text" class="form-control" placeholder="Enter Your Phone" maxlength="11" minlength="11" required>
  </div>
  <center>
  <button name="submit" type="submit" class="btn btn-primary mybtn">Submit</button>
</center>
</form>
</div>
</div>

<script>
    var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>

    <script>
$("#username").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
      </script>


<script>
$("#number").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
      </script>

<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
    
</form>  
</body>
</html>