<?php
require_once("connect.php");
session_start();
$var_value = $_GET['varname'];
$userId = $_SESSION['id'];
$emp = "";


$query = "INSERT into joinedProducts (productID, userID) values ( '$var_value','$userId')";
$result =  mysqli_query($conn, $query);
if ($result) {
    echo"helw";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart</title>
</head>
<body>
    
</body>
</html>