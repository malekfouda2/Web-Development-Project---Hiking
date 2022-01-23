<?php

session_start();
require_once("connect.php");

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  if (empty($_POST["name"])) {

    echo '<script>alert ("name is required")</script>';
  }
  if (!preg_match("/[a-zA-Z- ]*$/", $name)) {
    //$nameErr = "Only letters and white space allowed";
    echo '<script> alert("Only letters and numbers are allowed") </script> ';
  }
  $email = $_POST['email'];
  if (empty($_POST["email"])) {

    echo '<script>alert ("email is required")</script>';
  }

  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo '<script>alert ("invalid email format")</script>';
  }
  $place = $_POST['place'];

  $photo = $_FILES['photo']['name'];
  $target = "images/" . $photo;
  move_uploaded_file($_FILES['photo']['tmp_name'], $target);
    

  $sql = "INSERT INTO suggestions (name, email, place, placephoto) VALUES ('$name', '$email', '$place', '$photo')";
  $result = mysqli_query($conn, $sql);
  try{
    if(!$result)
    throw new Exception("Error occured!!");
    
  
} catch (Exception $e) {
  echo "Message:",$e->getMessage();
}

echo '<script> alert("Done :) ")</script>';
mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

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

        if (!isset($_SESSION['id'])) {
          echo ' <li class="nav-item active">
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>';
        }
        if (isset($_SESSION['id'])) {
          echo ' <li class="nav-item active">
        <a class="nav-link" href="signout.php">Logout <span class="sr-only">(current)</span></a>
      </li>';
        }

        if (isset($_SESSION['id'])) {
          echo ' <li class="nav-item active">
        <a class="nav-link" href="cart.php">Cart <span class="sr-only">(current)</span></a>
      </li>';
        }
        if (isset($_SESSION['id'])) {
          echo ' <li class="nav-item active">
        <a class="nav-link" href="contactus.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>';
        }
        if (isset($_SESSION['id'])) {
          echo ' <li class="nav-item active">
        <a class="nav-link" href="usermessage.php"> Live Chat <span class="sr-only">(current)</span></a>
      </li>';
        }




        ?>
        <li class="nav-item active">
          <a class="nav-link" href="products.php">Products</a>
        </li>

    </div>
  </nav>



  <div class="container">
    <center>
      <h1 class="ml2">Suggest A Place</h1>
    </center>
    <div class="jumbotron">
      <form action='' method='POST' enctype='multipart/form-data'>
        <div class="form-group">
          <label>Name</label>
          <input name="name" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="text" class="form-control">
        </div>
        <div class="form-group">
                    <label>Place</label>
                    <input name="place" type="text" class="form-control">
                </div>
        
        <div class="form-group">
          <label>Image</label>
          <input name="photo" type="file" class="form-control" required>
        </div>
        <center>
          <button name="submit" type="submit" value="upload" class="btn btn-primary mybtn">Edit</button>
        </center>
      </form>
    </div>
  </div>
  <script>
    var textWrapper = document.querySelector('.ml2');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
        loop: true
      })
      .add({
        targets: '.ml2 .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
      }).add({
        targets: '.ml2',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });
  </script>
</body>

</html>