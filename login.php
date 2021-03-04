
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tms Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">
      <script>
          var d = new Date();
          d.setFullYear(d.getFullYear());
          document.write(d);
      </script>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">

                                  <div class="signup-form">
                                      <form action="actions/server.php" method="post">
                                          <h2>Welcome Back!</h2>
                                          
                                          <div class="form-group">
                                              <div class="input-group">
                                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                  <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div class="input-group">
                                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <button type="submit" class="btn btn-primary btn-block btn-lg" name="login_user">Login</button>
                                          </div>

                                      </form>

                                      <hr>
                                      <div class="text-center">Don't have an account? <a href="register.php">SignUp here</a>.</div>
                                      <div class="text-center"><a href="forgot-password.php">Forgot Password?</a></div>
                                      <div class="text-center"><a href="index.php">Back to Home</a></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
