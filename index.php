<?php

require_once("connect.php");
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</head>
<body class="myhome">
   
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <a class="navbar-brand" href="index.php">MIU HIKING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      
     

      <?php

      if(!isset( $_SESSION['id']))
      {
        echo ' <li class="nav-item active">
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>';
      }
      else if(isset($_SESSION['id']))
      {
        echo ' <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>';

        
      }

       if(isset($_SESSION['id']))
      {
        echo ' <li class="nav-item active">
        <a class="nav-link" href="signout.php">Logout <span class="sr-only">(current)</span></a>
      </li>';
      }
      
      if(isset($_SESSION['id']))
      {
        echo ' <li class="nav-item active">
        <a class="nav-link" href="login.php">Cart <span class="sr-only">(current)</span></a>
      </li>';
      }
      if(isset($_SESSION['id']))
      {
        echo ' <li class="nav-item active">
        <a class="nav-link" href="contactus.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>';
      }


     

?>
 <li class="nav-item active">
        <a class="nav-link" href="products.php">Products</a>
      </li>
         
  </div>
</nav>


<div class="mymargins">

  <div class="row">
    <div class="col-lg-8">
       <div class="intro">
           <h2 class="introtext">Welcome to MIU Hiking, where every trip is different.</h2>
           <h6>Register to view all the availaible groups and join with the one you feel fits you the most</h6>
           <div class="mybttns">
           <button type="button" class="btn btn-primary cta" onclick="location.href='register.php'">Join Us Now</button>
           <button type="button" class="btn btn-primary groupsbttn" onclick="location.href='groups.php'">View all Groups</button>
           </div>

       </div>
    </div>
    <div class="col-lg-4">
    <div class="group">
    <img class="myimg" src="assets/img/c1.jpg">     
    </div>
  </div>    
  </div>
  </div>

  <div class="mymargins">
      <div class="row">
          <div class="col-lg-4">
<img class="myimg" src="assets/img/c1.jpg">
          </div>
          <div class="col-lg-4">
          <img  class="myimg" src="assets/img/c1.jpg">

              </div>
              <div class="col-lg-4">
              <img  class="myimg" src="assets/img/c1.jpg">

              </div>
      </div>
  </div>

  <div class="mymargins2">
      <div class="row">
          <div class="col-lg-4">
<img class="myimg" src="assets/img/c1.jpg">
          </div>
          <div class="col-lg-4">
          <img  class="myimg" src="assets/img/c1.jpg">

              </div>
              <div class="col-lg-4">
              <img  class="myimg" src="assets/img/c1.jpg">

              </div>
      </div>
  </div>

  <div class="aboutus">
      <center>
<h1>Meet some of our sponsors</h1>
</center>


<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/spons1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/spons1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/spons1.png" class="d-block w-100" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</div>



  <div class="footer">

  </div>
  <div>
    <h4 class="aboutus2">About Us</h1>
  </div>
  

</body>
</html>