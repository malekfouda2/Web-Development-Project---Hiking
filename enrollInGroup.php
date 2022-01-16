<?php
require_once("connect.php");
session_start();
$var_value = $_GET['varname'];
$userId = $_SESSION['id'];

$query = "INSERT into joined (user_id, group_id) values ('$userId', '$var_value')";
$result =  mysqli_query($conn,$query);
if($result)
{
    echo "5alsana";
}


?>