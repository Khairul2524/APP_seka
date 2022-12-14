<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h4>APP Seleksi Karyawan</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" action="<?= base_url('/login') ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" id="username" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="password" required autocomplete="off">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/js/template.js"></script>
    <script src="<?= base_url() ?>/js/settings.js"></script>
    <script src="<?= base_url() ?>/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>