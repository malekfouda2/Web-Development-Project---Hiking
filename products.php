<?php

require_once("connect.php");
session_start();
$query = "SELECT * FROM PRODUCTS";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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

         
  </div>
</nav>
<div class="form-group">
  <div class="input-group">
<span class="input-group-addon">Search</span>
<br>
<input type="text" name="search_text" id="search_text" placeholder="search for items" class="form-control">
</div>
</div>
<br />
<div id="result"></div>

<div class="container">



<div class='row myprods'>

<?php  
     $result->data_seek(0);
     while ($row = $result->fetch_assoc()) {
      $imageURL = 'images/'.$row["productPhoto"];
      echo "<div style='margin-top: 3%' class='col-lg'>";
      echo    "<div class='card' style='width: 18rem;'>";
      echo        "<img src='".$imageURL ." ' class='card-img-top' alt='...'>";
      echo        "<div class='card-body'>";
      echo          "<h5 class='card-title'>"  .$row['productName'] . "</h5>";
      echo          "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
      echo          "<a href='#' class='btn btn-primary'>Item Details</a>";
      echo          "<a href='addProductToCart.php?varname='$row[id]' class='btn btn-primary'>Add to cart</a>";
      echo        "</div>";
      echo      "</div>";  
      echo      "</div>";  
        }
    ?>
</div>
    
  <!--
    <div class="row myprods">
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/bike.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/bike.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div> <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/bike.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
</div>
-->
</div>
    
</body>
</html>
<script >
  

$(document).ready(function(){

$('#search_text').keyup(function(){
var txt=$(this).val();
//alert(txt);
if(txt !=''){
$.ajax({
  url:"products.php",
  method:"POST",
  data:{txt:txt},
  
  success:function(data){
    $('#result').html(data);}
  });
}

else{
  $('#result').css("display","none");
  
  }



  });

});






</script>
<?php



$connect=mysqli_connect("localhost","root","","hiking");
$output='';

if(isset($_POST['txt'])){

$txt=$_POST['txt'];

$sql="SELECT * FROM products WHERE productName LIKE '{$txt}%' ";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){

$output .= '<h4 align="center">Search Result</h4>';
$output .= '<div class="table.responsive">
             <table class="table table bordered">
             <thead>      
             <tr>
             <th>ID</th>
             <th>ProductName</th>
             <th>ProductDesc</th>
             <th>ProductPrice</th>
             <th>ProductPhoto</th>
             </tr>
             </thead>';
             while($row=mysqli_fetch_array($result))
             {
              $output .= '
                   <tr>
                   <td>'.$row["id"].'</td>
                   <td>'.$row["productName"].'</td>
                   <td>'.$row["productDesc"].'</td>
                   <td>'.$row["productPrice"].'</td>
                   <td>'.$row["productPhoto"].'</td>

                    </tr>
                               ';

             }
             echo $output;



}
else{
  echo 'product not found';
}
}












  ?>

