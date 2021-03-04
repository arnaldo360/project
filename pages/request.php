<?php
include '../db/dbconnect.php';
include '../actions/retrivedata.php';
include '../actions/auth.php';
include '../layoutIncl/heading.php';
include '../layoutIncl/leftnav.php';
include '../layoutIncl/topnav.php';

?>

                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                          <h1 class="h3 mb-0 text-gray-800">Request Form</h1>
                      </div>
                      <ol class="breadcrumb mb-4">
                          <!-- <li class="breadcrumb-item active"><?php //echo $request; ?></li> -->
                      </ol>

                      <div class="row">

                        <div class="col-lg-12">

                          <!-- DataTales -->
                          <div class="card shadow mb-4 border-bottom-success">

                              <?php
                              // Include config file
                              require_once "../db/dbconnect.php";

                              $i = 0;

                              // Attempt select query execution
                              $sql = "SELECT * FROM forms f , users u WHERE u.userId = f.fk_user ";
                              if($result = mysqli_query($conn, $sql)){
                                  if(mysqli_num_rows($result) > 0){
                                      echo "  <div class='card-body'>
                                                <div class='table-responsive'>
                                                    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                                        <thead>
                                                            <tr>
                                                                <th>S/No</th>
                                                                <th>FormId</th>
                                                                <th>Fullname</th>
                                                                <th>Request Use</th>
                                                                <th>Status</th>
                                                                <th>Requested date</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>S/No</th>
                                                                <th>FormId</th>
                                                                <th>Fullname</th>
                                                                <th>Request Use</th>
                                                                <th>Status</th>
                                                                <th>Requested date</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>";

                                                    while($row = mysqli_fetch_array($result)){
                                                        echo "<tr>";
                                                            echo "<td>" . ++$i . "</td>";
                                                            echo "<td>Fm" . $row['formId'] . "</td>";
                                                            echo "<td>" . $row['fullname'] . "</td>";
                                                            echo "<td>" . $row['request_for'] . "</td>";
                                                            echo "<td>" . $row['status'] . "</td>";
                                                            echo "<td>" . $row['requested_date'] . "</td>";
                                                            echo "<td>";
                                                                echo "<a href='update_form.php?id=". $row['formId'] ."' class='btn btn-info btn-circle btn-sm plus' title='Add' data-toggle='tooltip'><i class='fas fa-plus'></i></a>&nbsp&nbsp&nbsp&nbsp";
                                                                echo "<a href='../actions/updateStatus.php?id=". $row['formId'] ."' class='btn btn-success btn-circle btn-sm add' title='Attended' data-toggle='tooltip'><i class='fas fa-check'></i></a>&nbsp&nbsp&nbsp&nbsp";
                                                                echo "<a href='../actions/declineStatus.php?id=". $row['formId'] ."' class='btn btn-danger btn-circle btn-sm delete' title='Declined' data-toggle='tooltip'><i class='fas fa-times'></i></a>";
                                                            echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody>";
                                                echo "</table>";
                                                // Free result set
                                                mysqli_free_result($result);
                                            } else{
                                                echo "<p class='lead'><em>No records were found.</em></p>";
                                            }
                                        } else{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                        }

                                        // Close connection
                                        mysqli_close($conn);
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>



                  </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->


            <?php include '../layoutIncl/footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>


</body>

</html>
