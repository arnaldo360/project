<?php

if ((!isset($_SESSION['username']))&&(!isset($_SESSION['userId']))&&(!isset($_SESSION['role']))) {
header("Location: ../index.php");

} else {
	$role = $_SESSION['role'];
	$username = $_SESSION['username'];
	$userId = $_SESSION['userId'];
}

?>
