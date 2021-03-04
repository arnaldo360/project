<?php
include '../db/dbconnect.php';
include '../actions/retrivedata.php';
include '../actions/retriveFormdata.php';
include '../actions/auth.php';
include '../layoutIncl/heading.php';
include '../layoutIncl/leftnav.php';
include '../layoutIncl/topnav.php';


?>

                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                          <h1 class="h3 mb-0 text-gray-800">Update Form</h1>
                      </div>
                      <ol class="breadcrumb mb-4">
                          <!-- <li class="breadcrumb-item active"><?php //echo $_SESSION['success']; ?></li> -->
                      </ol>

                      <div class="row">

                        <div class="col-lg-12">

                            <!-- Basic Card  -->
                            <div class="card shadow mb-4 border-bottom-success" id="closeform">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Details</h6>
                                </div>
                                <div class="card-body">
                                  <div class="mt-3 pt-2 border-top">
                                      <div class="table-responsive">
                                          <table class="table table-borderless mb-0 text-muted">
                                              <tbody>
                                                  <tr>
                                                      <th scope="row">Form Id</th>
                                                      <td><?php echo $formID; ?></td>
                                                      <th scope="row">Fullname</th>
                                                      <td><?php echo $fullname; ?></td>
                                                      <th scope="row">Requested Date</th>
                                                      <td><?php echo $requested_date; ?></td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Contact</th>
                                                      <td><?php echo $contact; ?></td>
                                                      <th scope="row">Id Type</th>
                                                      <td><?php echo $Id_type; ?></td>
                                                      <th scope="row">Id Number</th>
                                                      <td><?php echo $Id_number; ?></td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Region</th>
                                                      <td><?php echo $region; ?></td>
                                                      <th scope="row">Ward</th>
                                                      <td><?php echo $ward; ?></td>
                                                      <th scope="row">District</th>
                                                      <td><?php echo $district; ?></td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Pillar</th>
                                                      <td><?php echo $pillar; ?></td>
                                                      <th scope="row">Phase</th>
                                                      <td><?php echo $phase; ?></td>
                                                      <th scope="row">Wire Size</th>
                                                      <td><?php echo $wiresize; ?></td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Meter Number</th>
                                                      <td><?php echo $controlNo; ?></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                                  <div class="mt-3 pt-2 border-top">
                                      <div class="row">
                                        <div class="col-lg-3">
                                            <form>
                                              <div class="form-group">
                                                <div class="form-group mb-5 justify-content-end row">
                                                  <div class="col-10">
                                                      <button type="button" class="btn btn-success btn-icon-split" id="sample">
                                                          <span class="icon text-white-50"><i class="fas fa-pencil-alt"></i></span>
                                                          <span class="Edit">Edit</span>
                                                      </button>
                                                    </div>
                                                  </div>
                                              </div>
                                            </form>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- end card -->


                            <!-- Basic Card  -->
                            <div class="card shadow mb-4 border-bottom-success" id="hide_btn">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Editing Options</h6>
                                </div>
                                <div class="card-body">
                                  <form method="post" action="../actions/updateForm.php">
                                    <div class="row">
                                        <div class="form-group col-4">
                                          <label>Pillar</label>
                                          <input type="number" class="form-control" placeholder="<?php echo $pillar; ?>" name="pillar" required>
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Electrical Phase</label>
                                                <input type="number" class="form-control" placeholder="<?php echo $phase; ?>" name="phase" required>
                                          </div>

                                        <div class="form-group col-4">
                                          <label>Wire Size</label>
                                          <input type="number" class="form-control" placeholder="<?php echo $wiresize;  ?>" name="wiresize" required>
                                        </div>
                                    </div><hr>

                                    <div class="row">

                                        <div class="form-group col-4">
                                          <label>FormId</label>
                                          <input type="text" class="form-control-plaintext" name="formId" value="<?php echo $formID;  ?>">
                                        </div>
                                    </div><hr>

                                    <div class="row">
                                        <div class="form-group col-4">
                                            <div class="form-group mb-3 justify-content-end row">
                                              <div class="col-10">
                                                  <button type="submit" class="btn btn-success btn-icon-split" name="submit">
                                                      <span class="icon text-white-50"><i class="fas fa-save"></i></span>
                                                      <span class="text">Submit</span>
                                                  </button>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="form-group mb-3 justify-content-end row">
                                              <div class="col-10">
                                                  <button type="button" class="btn btn-danger btn-icon-split" id="btn_cancle">
                                                      <span class="icon text-white-50"><i class="fas fa-times"></i></span>
                                                      <span class="text">Cancle</span>
                                                  </button>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                  </form>
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

  <script type="text/javascript">

    $(document).ready(function(){
        // Hide displayed paragraphs
        $("#hide_btn").hide(30);
        $("#sample").click(function(){
            $("#hide_btn").show(50);
            $("#closeform").hide(50);
        });

        $("#btn_cancle").click(function(){
            $("#hide_btn").hide(50);
            $("#closeform").show(50);
        });

    });

  </script>

</body>

</html>
