

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-user-alt"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Tms</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <?php
                        if($role == 1){
                        echo "
                <!-- Nav Item - Dashboard -->
                <li class='nav-item'>
                    <a class='nav-link' href='welcome.php'>
                        <i class='fas fa-fw fa-tachometer-alt'></i>
                        <span>Dashboard</span></a>
                </li>



                <!-- Divider -->
                <hr class='sidebar-divider'>

                <!-- Heading -->
                <li class='nav-item'>
                    <a class='nav-link' href='form.php'>
                        <i class='fas fa-id-card-alt'></i>
                        <span>Request Form</span></a>
                </li>";
              }else {
                // code...
                echo "
                  <!-- Nav Item - Dashboard -->
                  <li class='nav-item'>
                      <a class='nav-link' href='welcome.php'>
                          <i class='fas fa-fw fa-tachometer-alt'></i>
                          <span>Dashboard</span></a>
                  </li>

                  <!-- Divider -->
                  <hr class='sidebar-divider'>

                  <!-- Heading -->
                  <li class='nav-item'>
                      <a class='nav-link' href='request.php'>
                          <i class='fas fa-drumstick-bite'></i>
                          <span>Requests</span></a>
                  </li>

                  <!-- Divider -->
                  <hr class='sidebar-divider'>

                  <!-- Heading -->
                  <li class='nav-item'>
                      <a class='nav-link' href='activity.php'>
                          <i class='fas fa-cloud-download-alt'></i>
                          <span>System Activities</span></a>
                  </li>

                  <!-- Divider -->
                  <hr class='sidebar-divider'>

                  <!-- Heading -->
                  <li class='nav-item'>
                      <a class='nav-link' href='form.php'>
                          <i class='fas fa-id-card-alt'></i>
                          <span>Request Form</span></a>
                  </li>";
                        }
                        ?>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->
