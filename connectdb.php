<?php


$host = "localhost";
$username = "root";
$password = "";
$db = "login";


$con = mysqli_connect($host, $username, $password,$db);
mysqli_select_db($con,$db) or die(mysqli_error($con));
?>