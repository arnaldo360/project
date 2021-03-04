<?php
include '../db/dbconnect.php';
session_start();
// Escape user inputs for security
$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

// Attempt insert query execution
$sql = "UPDATE users SET fullname='$fullname', phone=$phone, address='$address',gender='$gender',dob='$dob' WHERE username = '$_SESSION[username]'";

if(mysqli_query($conn, $sql)){

  $sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('User has Updated profile successfull','PROFILE UPDATE',$_SESSION[userId])";

    if (mysqli_query($conn, $sqlActivity)) {
      // code...
      $_SESSION['profile'] = "Request completed";
      header('location: ../pages/profile.php');
    }else {
      echo mysqli_error($conn);
    }

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

 ?>
