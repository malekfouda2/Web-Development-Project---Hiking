





<?php
session_start();
require_once("connect.php");
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM products 
  WHERE productName LIKE '%".$search."%'
  
 ";
}
else
{
 $query = "
  SELECT * FROM products ORDER BY id
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
echo "<div class='row myprods'>";
$result->data_seek(0);
     while ($row = $result->fetch_assoc()) {
      $imageURL = 'images/'.$row["productPhoto"];
      echo "<div style='margin-top: 3%' class='col-lg'>";
      echo    "<div class='card' style='width: 18rem;'>";
      echo        "<img src='".$imageURL ." ' class='card-img-top' alt='...'>";
      echo        "<div class='card-body'>";
      echo          "<h5 class='card-title'>"  .$row['productName'] . "</h5>";
      echo          "<p class='card-text'>".$row['productPrice']."</p>";
    
      echo          "<a href='addProductToCart.php' class='btn btn-primary'>Add to cart</a>";
      echo        "</div>";
      echo      "</div>";  
      echo      "</div>";  
        }
        echo "</div>";
 
}
else
{
 echo 'Data Not Found';
}

  ?>