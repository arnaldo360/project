<?php
session_start();

// initializing variable
$username = "";
$email    = "";
$password = "";
$errors = array();

// connect to the database
include_once '../db/dbconnect.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {

  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password1 = mysqli_real_escape_string($conn, $_POST['password1']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password1) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists

    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, user_role)
  			  VALUES('$username', '$email', '$password', 1)";
  	if (mysqli_query($conn, $query)) {

      $_SESSION['success'] = "You are now Registered Please Login";
      header('location: ../login.php');
        }
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {

      $logged_in_user = mysqli_fetch_assoc($results);

      $_SESSION['userId'] = $logged_in_user['userId'];
      $_SESSION['username'] =  $logged_in_user['username'];
      $_SESSION['role'] =  $logged_in_user['user_role'];
      $_SESSION['success'] = "You are now logged in";

      $sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('User has Logged In successfull','LOGIN',$logged_in_user[userId])";

        if (mysqli_query($conn, $sqlActivity)) {
          // code...
          header('location: ../pages/welcome.php');
        }else {
          echo mysqli_error($conn);
        }


    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
