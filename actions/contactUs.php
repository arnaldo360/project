<?php
// connect to the database
include '../db/dbconnect.php';

// initializing variable
$fullname = "";
$email    = "";
$subject = "";
$message = "";



// CONTACT US REQUESTS
if (isset($_POST['sms_send'])) {

  // receive all input values from the form
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);


  // Finally, user request to contact us will be sent to database
  	$query = "INSERT INTO contactus (fullname, email, subject, message)
  			  VALUES('$fullname', '$email', '$subject', '$message')";
  	if (mysqli_query($conn, $query)) {


      header('location: ../index.php');
        }

}

?>
