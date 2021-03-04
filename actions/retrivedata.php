<?php
session_start();

$queryselect = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
$results = mysqli_query($conn, $queryselect);
$rows = mysqli_fetch_row($results);

$Id = $rows['0'];
$username = $rows['1'];
$email = $rows['2'];
$fullname = $rows['4'];
$phone = $rows['5'];
$address = $rows['6'];
$gender = $rows['7'];
$dob = $rows['8'];
$image = $rows['9'];

 ?>
