<?php
include '../db/dbconnect.php';
include '../actions/retrivedata.php';

	$sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('User has Logged Out successfull','LOGOUT',$Id)";

		if (mysqli_query($conn, $sqlActivity)) {
			session_destroy();
			unset($_SESSION['user_id']);
			unset($_SESSION['username']);
			header("location: ../index.php");
		}else {
			echo mysqli_error($conn);
		}


?>
