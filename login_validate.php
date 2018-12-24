<?php


session_start(); 


include_once("connectdb.php");


?>





<?php

$con=mysqli_connect($host, $username, $password,$db);

if (!empty($_POST['username']) or !empty($_POST['password'])) {

    $user = trim($_POST['username']);

    $pass = trim($_POST['password']);

 @$sql = "SELECT * FROM user WHERE username ='".$user."' AND password = '".$pass."' LIMIT 1";

 $res = mysqli_query($con,$sql) or die(mysqli_error($con));

 if (mysqli_num_rows($res) == 1) {

  $rows = mysqli_fetch_assoc($res);

  $_SESSION['username'] = $rows['username'];

  header("Location: login.html");

 } else {

  echo "Invalid login information.";

  exit();

 }

    } else {

      echo "Please input username and password!";

    }





?>

