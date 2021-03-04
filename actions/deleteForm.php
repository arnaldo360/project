<?php

if(isset($_POST["delete_Form"])){

  //Store deleted property id
  $deleted_id = $_POST["delete_id"];

    // Prepare a delete statement
    $sql = "DELETE FROM forms WHERE formId = '$deleted_id'";
    $resultId = mysqli_query($conn, $sql);

    if ($resultId) {
      // code...
      $sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('User request Form has Been Deleted','DELETE FORM',$Id)";
      if (mysqli_query($conn, $sqlActivity)) {
        $_SESSION['delete'] = "Request completed";
        header("location: ../pages/welcome.php");
      }else {
        echo mysqli_error($conn);
      }


    }

    // Close connection
    mysqli_close($conn);
}
?>
