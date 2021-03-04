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
                          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $_SESSION['success']; ?></li>
                        </ol>

                      <!-- Content Row -->
                      <div class="row">

                          <!-- System Activities -->
                          <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                  ACTIVITIES</div>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $sql = "SELECT count(act_id) AS Activity FROM activities";

                                                  $runSql = mysqli_query($conn, $sql);
                                                  if (mysqli_num_rows($runSql) > 0) {
                                                    while($row = mysqli_fetch_array($runSql)){
                                                      $dataValue = $row['Activity'];
                                                      echo $dataValue;
                                                    }
                                                  }

                                                 ?>
                                              </div>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Attended Requests -->
                          <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-info shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                  Attended Requests</div>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $sql = "SELECT count(formId) AS attended FROM forms WHERE status = 'attended' ";

                                                  $runSql = mysqli_query($conn, $sql);
                                                  if (mysqli_num_rows($runSql) > 0) {
                                                    while($row = mysqli_fetch_array($runSql)){
                                                      $dataValue = $row['attended'];
                                                      echo $dataValue;
                                                    }
                                                  }

                                                 ?>
                                              </div>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-check fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Declined Requests -->
                          <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-danger shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                  DECLINED REQUEST</div>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $sql = "SELECT count(formId) AS declined FROM forms WHERE status = 'declined' ";

                                                  $runSql = mysqli_query($conn, $sql);
                                                  if (mysqli_num_rows($runSql) > 0) {
                                                    while($row = mysqli_fetch_array($runSql)){
                                                      $dataValue = $row['declined'];
                                                      echo $dataValue;
                                                    }
                                                  }

                                                 ?>
                                              </div>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-times fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Pending Requests  -->
                          <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-warning shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                  Pending Requests</div>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $sql = "SELECT count(formId) AS pending FROM forms WHERE status = 'pending' ";

                                                  $runSql = mysqli_query($conn, $sql);
                                                  if (mysqli_num_rows($runSql) > 0) {
                                                    while($row = mysqli_fetch_array($runSql)){
                                                      $dataValue = $row['pending'];
                                                      echo $dataValue;
                                                    }
                                                  }

                                                 ?>
                                              </div>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-door-closed fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Content Row -->


                      <!-- datatable -->
                      <div class="row">

                        <div class="col-lg-12">

                          <!-- DataTales -->
                          <div class="card shadow mb-4 border-bottom-success">
                              <div class="card-header py-3">
                                <a href="form.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                  <button type="button" class="btn btn-success add-new"><i class="fa fa-plus"></i> Request Form</button>
                                </a>
                              </div>

                              <?php
                              // Include config file
                              require_once "../db/dbconnect.php";

                              $i = 0;
                              // Attempt select query execution
                              $sql = "SELECT f.formId, (SELECT fullname FROM users u1 WHERE u1.userId = $userId) AS fullname ,f.status,f.requested_date FROM forms f INNER JOIN users u ON f.fk_user = $userId GROUP BY f.formId";
                              if($result = mysqli_query($conn, $sql)){
                                  if(mysqli_num_rows($result) > 0){
                                      echo "<div class='card-body'>";
                                                echo "<div class='table-responsive'>";
                                                    echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                                        echo "<thead>";
                                                            echo "<tr>";

                                                  echo "<thead>";
                                                      echo "<tr>";
                                                          echo "<th>S/No</th>";
                                                          echo "<th>FormId</th>";
                                                          echo "<th>Fullname</th>";
                                                          echo "<th>Status</th>";
                                                          echo "<th>Requested date</th>";
                                                          echo "<th>Actions</th>";
                                                      echo "</tr>";
                                                  echo "</thead>";
                                                  echo "<tfoot>";
                                                      echo "<tr>";
                                                          echo "<th>S/No</th>";
                                                          echo "<th>FormId</th>";
                                                          echo "<th>Fullname</th>";
                                                          echo "<th>Status</th>";
                                                          echo "<th>Requested date</th>";
                                                          echo "<th>Actions</th>";
                                                      echo "</tr>";
                                                  echo "</tfoot>";
                                                  echo "<tbody>";

                                                    while($row = mysqli_fetch_array($result)){
                                                        echo "<tr>";
                                                            echo "<td>" . ++$i . "</td>";
                                                            echo "<td>" . $row['formId'] . "</td>";
                                                            echo "<td>" . $row['fullname'] . "</td>";
                                                            echo "<td>" . $row['status'] . "</td>";
                                                            echo "<td>" . $row['requested_date'] . "</td>";
                                                            echo "<td>";
                                                                echo "<a href='viewForm.php?id=". $row['formId'] ."' class='btn btn-warning btn-circle btn-sm add' title='View' data-toggle='tooltip'><span><i class='fas fa-eye'></i></span></a>&nbsp&nbsp&nbsp&nbsp";
                                                                // echo "<a href='../actions/updateForm.php?id=". $row['formId'] ."' class='btn btn-info btn-circle btn-sm edit' title='Edit' data-toggle='tooltip'><span><i class='fas fa-pencil-alt'></i></span></a>";
                                                                echo "<a href='delete_form.php?id=". $row['formId'] ."' class='btn btn-danger btn-circle btn-sm delete' title='Delete' data-toggle='tooltip'><span><i class='fas fa-trash'></i></span></a>";
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
                      <!-- datatable -->

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

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>
