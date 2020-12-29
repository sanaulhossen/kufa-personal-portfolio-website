<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Enlink - Admin Dashboard Template</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/logo/favicon.png">
  <!-- page css -->
  <!-- Core css -->
  <link href="/practice/dashbord_assets/css/app.min.css" rel="stylesheet">

</head>
<body>
  <div class="app">
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('/practice/dashbord_assets/images/others/login-3.png')">
      <div class="d-flex flex-column justify-content-between w-100">
        <div class="container d-flex h-100">
          <div class="row align-items-center w-100">
              <div class="col-md-7 col-lg-5 m-h-auto">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-30">
                      <img class="img-fluid" alt="" src="/practice/dashbord_assets/images/logo/logo.png">
                      <h2 class="m-b-0">Sign Up</h2>
                    </div>

                    <?php if(isset($_SESSION['used_email'])): ?>
                        <div class="alert alert-danger">
                          You insert a used email!!
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['error_password'])): ?>
                        <div class="alert alert-danger">
                          Confirm Password Does Not Match!!
                        </div>
                    <?php endif; ?>

                    <?php
                      session_destroy();
                    ?>

                    <form method="post" action="register_back.php">
                      <div class="form-group">
                        <label class="font-weight-semibold" for="userName">Email:</label>
                        <div class="input-affix">
                          <i class="prefix-icon anticon anticon-user"></i>
                          <input type="email" class="form-control" id="userName" placeholder="Username" name="user_email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="font-weight-semibold" for="password">Password:</label>
                        <div class="input-affix m-b-10">
                          <i class="prefix-icon anticon anticon-lock"></i>
                          <input type="password" class="form-control" id="password" placeholder="Password" name="user_password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="font-weight-semibold" for="confirm_password">Confirm Password:</label>
                        <div class="input-affix m-b-10">
                          <i class="prefix-icon anticon anticon-lock"></i>
                          <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="user_confirm_password">
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary">Sign Up</button>
                      </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-md-flex p-h-40 justify-content-between">
          <span class="">© 2019 ThemeNate</span>
          <ul class="list-inline">
            <li class="list-inline-item">
                <a class="text-dark text-link" href="">Legal</a>
            </li>
            <li class="list-inline-item">
                <a class="text-dark text-link" href="">Privacy</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Core Vendors JS -->
  <script src="/practice/dashbord_assets/js/vendors.min.js"></script>
  <!-- page js -->
  <!-- Core JS -->
  <script src="/practice/dashbord_assets/js/app.min.js"></script>

</body>
</html>