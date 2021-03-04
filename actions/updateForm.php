 <?php
 include '../db/dbconnect.php';
 include '../actions/retrivedata.php';

if (isset($_POST['submit'])) {
  // code...

  $pillar = mysqli_real_escape_string($conn, $_POST['pillar']);
  $phase = mysqli_real_escape_string($conn, $_POST['phase']);
  $wiresize = mysqli_real_escape_string($conn, $_POST['wiresize']);
  $formID = mysqli_real_escape_string($conn, $_POST['formId']);

  $controlNo = rand(1000000,9999999999) ;
      // Attempt insert query execution
      $sql = "UPDATE forms SET pillar = $pillar, phase =$phase, wireSize = $wiresize, controlNo = $controlNo , update_date = CURRENT_TIMESTAMP WHERE formId = $formID";

      if(mysqli_query($conn, $sql)){

        $sqlActivity = "INSERT INTO activities (description,activity,fk_userid) VALUES ('SuperUser has Updated User form successfull','UPDATE FORM',$Id)";
        if (mysqli_query($conn, $sqlActivity)) {
          // code...
          $_SESSION['request'] = "Request completed";
          header("location: ../pages/request.php");
        }else {
          echo mysqli_error($conn);
        }

      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
}



  ?>
