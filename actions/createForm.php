<?php

// Include database connect file
include '../db/dbconnect.php';
include '../actions/retrivedata.php';

if (isset($_POST['req_form'])) {


	$rod = mysqli_real_escape_string($conn, $_POST['rod']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$region = mysqli_real_escape_string($conn, $_POST['region']);
	$district = mysqli_real_escape_string($conn, $_POST['district']);
  $ward = mysqli_real_escape_string($conn, $_POST['ward']);
  $request = mysqli_real_escape_string($conn, $_POST['request']);
  $idtype = mysqli_real_escape_string($conn, $_POST['idtype']);
  $numberId = mysqli_real_escape_string($conn, $_POST['numberId']);

	$queryInsert = "INSERT INTO forms(fk_user, region, ward, district, requested_date, status, request_for, contact, Id_type, Id_number)
  VALUES ($Id, '$region', '$ward', '$district', '$rod', 'Pending', '$request', '$contact', '$idtype', $numberId)";

	$resultsInsert = mysqli_query($conn, $queryInsert);

  if($resultsInsert){
		$sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('User request has Been Created successfull','CREATE FORM',$Id)";
		if (mysqli_query($conn, $sqlActivity)) {

	  $_SESSION['form'] = "Request completed";
	  header('location: ../pages/welcome.php');
		}else {
			echo mysqli_error($conn);
		}
  } else {
    echo mysqli_error($conn);
  }
}
?>
