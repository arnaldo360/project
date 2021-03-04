<?php
include '../db/dbconnect.php';
include '../actions/retrivedata.php';
include '../actions/auth.php';
include '../layoutIncl/heading.php';
// include '../layoutIncl/leftnav.php';
include '../layoutIncl/topnav.php';


?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="welcome.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
          <i class="fas fa-fw fa-tachometer-alt fa-sm text-white-50"></i>Dashboard</a>
    </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Logo & title -->
                                            <!-- php code for retriving data from database -->

                                        <?php

                                        $id = '';
                                        if(isset($_GET['id'])){
                                            $formID = $_GET['id'];
                                        }
                                        $sql =" SELECT * FROM forms F INNER JOIN users U ON F.formId = '$formID' AND U.userId = F.fk_user LIMIT 1";

                                        $resultsFormDetails = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_array($resultsFormDetails)){
                                            $formID = $row['formId'];
                                            $userId = $row['fk_user'];
                                            $username = $row['username'];
                                            $fullname = $row['fullname'];
                                            $address = $row['address'];
                                            $status = $row['status'];
                                            $rod = $row['requested_date'];
                                            $dob = $row['dob'];
                                            $idtype = $row['Id_type'];
                                            $contact = $row['contact'];
                                            $idnumber = $row['Id_number'];
                                            $req_for = $row['request_for'];
                                            $region = $row['region'];
                                            $ward = $row['ward'];
                                            $district = $row['district'];
                                            $gender = $row['gender'];

                                        }

                                        echo "<div class= 'clearfix '>
                                            <div class= 'float-sm-right '>
                                                <h4 class= 'm-0 d-inline align-middle '>TMS</h4>

                                            </div>
                                            <div class= 'float-sm-left '>
                                                <h4 class= 'm-0 d-print-none '>FORM</h4>
                                                <dl class= 'row mb-2 mt-3 '>
                                                    <dt class= 'col-sm-9 font-weight-heavy '>Form Number </dt>
                                                    <dd class= 'col-sm-9 font-weight-normal '>  Fm$formID</dd>

                                                    <dt class= 'col-sm-9 font-weight-heavy '>Requested Date </dt>
                                                    <dd class= 'col-sm-9 font-weight-normal '>$rod</dd>
                                                </dl>
                                            </div>";

                                            echo "<div class= 'float-sm-right '>
                                                <dl class= 'row mb-2 mt-3 '>
                                                    <img src='../assets/img/$image' alt='' style= 'border-radius: 50%;' width='150' height='150'>

                                                </dl>
                                            </div>


                                        </div>

                                        <div class= 'row mt-4 '>
                                            <div class= 'col-md-6 '>
                                                <h6 class= 'font-weight-heavy '>Requester Name</h6>
                                                <h6 class= 'font-size-16 '>$username</h6>
                                            </div> <!-- end col -->
                                        </div><!-- end row -->

                                        <div class= 'row '>
                                            <div class= 'col-12 '>
                                                <div class= 'table-responsive '>
                                                    <table class= 'table mt-4 table-centered '>
                                                         <thead>
                                                            <tr>
                                                                <th>Fullname</th>
                                                                <th>Gender</th>
                                                                <th>Date Of Birth</th>
                                                                <th>Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>$fullname </td>
                                                                <td>$gender</td>
                                                                <td>$dob</td>
                                                                <td>$email</td>
                                                            </tr>
                                                        </tbody>
                                                        <thead>
                                                            <tr>
                                                                <th>Region</th>
                                                                <th>Ward</th>
                                                                <th>District</th>
                                                                <th>Physical Address</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>$region</td>
                                                                <td>$ward</td>
                                                                <td>$district</td>
                                                                <td>$address</td>
                                                            </tr>
                                                        </tbody>
                                                        <thead>
                                                            <tr>
                                                                <th>Request For(Use)</th>
                                                                <th>Id Type</th>
                                                                <th>Id Number</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>$req_for</td>
                                                                <td>$idtype</td>
                                                                <td>$idnumber</td>
                                                            </tr>
                                                        </tbody>
                                                        <thead>
                                                            <tr>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>$status</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive -->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class= 'row '>
                                            <div class= 'col-sm-6 '>
                                                <div class= 'clearfix pt-5 '>
                                                    <h6 class= 'text-muted '>Note:</h6>

                                                    <small class= 'text-muted '>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </small>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class= 'mt-5 mb-1 '>
                                            <div class= 'text-right d-print-none '>
                                                <a href= 'javascript:window.print() ' class= 'btn btn-success '><i class= 'uil uil-print mr-2 '></i> Print</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->

                </div> <!-- content -->";

    ?>
    <!-- php code for retriving data from database -->


                <!-- Footer Start -->
                <?php include '../layoutIncl/footer.php';  ?>
                <!-- end Footer -->

            </div>


    </body>
</html>
