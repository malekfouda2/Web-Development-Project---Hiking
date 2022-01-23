<?php
require_once("connect.php");
session_start();
$var_name= $_GET['varname'];
$userID= $_SESSION['id'];
$query="DELETE FROM cart WHERE userID= $userID AND productID= $var_name;";
$result=mysqli_query($conn, $query);
if($result){
    echo "<script> alert('Item removed succesfully!')";
    header("location: cart.php");
}
else{
    echo "<script> alert('Item not removed succesfully!')";
}

?>