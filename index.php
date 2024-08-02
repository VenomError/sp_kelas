<?php
require_once __DIR__ . '/config.php';
$name = NAME;
$nim = NIM;
$img = IMG;
$semester = SEMESTER;
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-lockscreen-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2024 13:04:24 GMT -->

<head>

  <meta charset="utf-8" />
  <title><?= $name ?> - sp kelas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="sp kelas b - platform komputasi awan" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Layout config Js -->
  <script src="assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

  <div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
      <div class="bg-overlay"></div>

      <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
          <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
        </svg>
      </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-12 mb-5">
            <div class="text-center mt-sm-5 mb-4 text-white-50">
              <div>
                <!-- <a href="index.html" class="d-inline-block auth-logo">
                  <img src="assets/images/logo-light.png" alt="" height="20">
                </a> -->
              </div>
              <!-- <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p> -->
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

              <div class="card-body p-4">
                <div class="text-center mt-2">
                  <h5 class="text-primary">PLATFORM KOMPUTASI AWAN </h5>
                  <p class="text-muted"></p>
                </div>
                <div class="user-thumb text-center">
                  <img src="img/<?= $img ?>" class="rounded-circle img-thumbnail avatar-lg shadow" alt="thumbnail">
                  <h5 class="font-size-15 mt-3"><span class="mr-2">Nama Lengkap : </span><?= $name ?></h5>
                  <h5 class="font-size-15 mt-3"><span class="mr-2">Nim : </span><?= $nim ?></h5>
                  <h5 class="font-size-15 mt-3"><span class="mr-2">Semester : </span><?= $semester ?></h5>
                </div>
              </div>
              <!-- end card body -->
            </div>
            <!-- end card -->


          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
  </div>
  <!-- end auth-page-wrapper -->

  <!-- JAVASCRIPT -->
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>
  <script src="assets/libs/feather-icons/feather.min.js"></script>
  <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
  <script src="assets/js/plugins.js"></script>

  <!-- particles js -->
  <script src="assets/libs/particles.js/particles.js"></script>
  <!-- particles app js -->
  <script src="assets/js/pages/particles.app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-lockscreen-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2024 13:04:24 GMT -->

</html>