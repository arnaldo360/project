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
                <h1 class="h3 mb-0 text-gray-800">Form</h1>
            </div>
            <ol class="breadcrumb mb-4">
                <!-- <li class="breadcrumb-item active"><?php //echo $_SESSION['form']; ?></li> -->
            </ol>

            <div class="row">

              <div class="col-lg-12">
                  <!-- Basic Card  -->
                  <div class="card mb-4 py-3 border-bottom-success">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
                      </div>
                      <div class="card-body">
                          <form>
                            <div class="row">
                                <div class="form-group col-4">
                                  <label>User ID</label>
                                  <input type="text" class="form-control-plaintext" placeholder="<?php echo $Id; ?>">
                                </div>

                                <div class="form-group col-4">
                                  <label>Full Name</label>
                                  <input type="text" class="form-control-plaintext" placeholder="<?php echo $fullname; ?>">
                                </div>

                                <div class="form-group col-4">
                                  <label>Email</label>
                                  <input type="text" class="form-control-plaintext" placeholder="<?php echo $email; ?>">
                                </div>
                            </div><hr>
                          </form>
                      </div>
                  </div>

                  <!-- Basic Card  -->
                  <div class="card mb-4 py-3 border-bottom-success">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Required Details</h6>
                      </div>
                      <div class="card-body">

                            <form method="post" action="../actions/createForm.php">
                                <div class="row">
                                  <div class="form-group col-4">
                                      <label>Requested Date</label>
                                      <div class="input-group">
                                          <input type="date" class="form-control" placeholder="Date of Birth" name="rod">
                                      </div>
                                  </div>

                                    <div class="form-group col-4">
                                        <label>Physical Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Address Box" name="address">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                      <label>Phone Number</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="0755900033" name="contact">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="form-group col-4">
                                      <label>Region</label>
                                      <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Region" name="region">
                                      </div>
                                  </div>

                                    <div class="form-group col-4">
                                        <label>District</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="District" name="district">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                      <label>Ward</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Ward" name="ward">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="form-group col-4">
                                      <label>Requesting For</label>
                                        <select class="form-control" name="request">
                                            <option>Select Options</option>
                                            <option value="home">Home Use</option>
                                            <option value="industrial">Industrial User</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Type of ID</label>
                                          <select class="form-control" name="idtype">
                                              <option>Select Options</option>
                                              <option value="driver">Driver ID</option>
                                              <option value="national">National ID</option>
                                              <option value="voter">Voters ID</option>
                                              <option value="passport">Passport ID</option>
                                          </select>
                                      </div>

                                    <div class="form-group col-4">
                                      <label>ID Number</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="ID number" name="numberId">
                                        </div>
                                    </div>
                                </div><hr>

                                <div class="row">
                                    <div class="form-group mb-7 justify-content-end row">
                                      <div class="col-1">
                                          <button type="submit" class="btn btn-success btn-icon-split" name="req_form">
                                              <span class="icon text-white-50"><i class="fas fa-paper-plane"></i></span>
                                              <span class="text">Submit</span>
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

</body>

</html>
