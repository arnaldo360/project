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
                          <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                      </div>
                      <ol class="breadcrumb mb-4">
                          <!-- <li class="breadcrumb-item active"><?php //echo $_SESSION['profile']; ?></li> -->
                      </ol>

                      <div class="row">

                        <div class="col-lg-12">

                            <!-- Basic Card  -->
                            <div class="card shadow mb-4" id="closeform">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
                                </div>
                                <div class="card-body">
                                  <div class="text-center mt-3">
                                    <?php
                                        echo "<img src='../assets/img/$image' alt='' style= 'border-radius: 50%;' width='150' height='150'>";
                                     ?>
                                     <form action="../actions/uploadImage.php" method="post" enctype="multipart/form-data">
                                         <input type="file" name="photo" id="fileSelect">
                                         <input type="submit" name="submit" value="Upload">
                                     </form>
                                      <h5 class="mt-2 mb-0"><?php echo $fullname; ?></h5>
                                      <h6 class="text-muted font-weight-normal mt-2 mb-0"><?php echo $gender; ?>
                                      </h6>
                                      <h6 class="text-muted font-weight-normal mt-1 mb-4"><?php echo $dob; ?></h6>
                                  </div>

                                  <!-- profile  -->
                                  <div class="mt-3 pt-2 border-top">
                                      <h4 class="mb-3 font-size-15">Contact Information</h4>
                                      <div class="table-responsive">
                                          <table class="table table-borderless mb-0 text-muted">
                                              <tbody>
                                                  <tr>
                                                      <th scope="row">Email</th>
                                                      <td><?php echo $email; ?></td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Phone</th>
                                                      <td><?php echo $phone; ?></td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Address</th>
                                                      <td><?php echo $address; ?></td>
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
                            <div class="card shadow mb-4" id="hide_btn">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Editing Options</h6>
                                </div>
                                <div class="card-body">
                                  <form method="post" action="../actions/updateUser.php">
                                    <div class="row">
                                        <div class="form-group col-4">
                                          <label>Fullname</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $fullname; ?>" name="fullname" required>
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Gender</label>
                                              <select class="form-control" name="gender" required>
                                                  <option>Select Options</option>
                                                  <option value="Male">Male</option>
                                                  <option value="Female">Female</option>
                                              </select>
                                          </div>

                                        <div class="form-group col-4">
                                          <label>Contact</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $phone; ?>" name="phone" required>
                                        </div>
                                    </div><hr>

                                    <div class="row">
                                        <div class="form-group col-4">
                                          <label>Address</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $address; ?>" name="address" required>
                                        </div>

                                        <div class="form-group col-4">
                                          <label>Date Of Birth</label>
                                          <input type="date" class="form-control" name="dob" required>
                                        </div>

                                    </div><hr>

                                    <div class="row">
                                        <div class="form-group col-4">
                                            <div class="form-group mb-3 justify-content-end row">
                                              <div class="col-10">
                                                  <button type="submit" class="btn btn-success btn-icon-split">
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
                                                      <span class="text">Cancel</span>
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
