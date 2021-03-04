<?php
include '../db/dbconnect.php';
include '../actions/retrivedata.php';

$id = '';
if(isset($_GET['id'])){
    $formID = $_GET['id'];

    // Attempt insert query execution
    $sql = "UPDATE forms SET status='Declined' WHERE formId = '$formID'";

    if(mysqli_query($conn, $sql)){
      $sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('User request has Been Declined ','DECLINE',$Id)";
      if (mysqli_query($conn, $sqlActivity)) {
        // code...
        header('location: ../pages/request.php');
      }else {
        echo mysqli_error($conn);
      }

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

 ?>
