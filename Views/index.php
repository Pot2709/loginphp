
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->

    <!-- Layout config Js -->
    <script src="<?php echo base_url; ?>Assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url; ?>Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url; ?>Assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url; ?>Assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php echo base_url; ?>Assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url; ?>Assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- CSS de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



</head>

<body>

    <div class="auth-page-wrapper pt-5">

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <!-- logo-imagen -->
                                    <!-- <img src="assets/images/logo-light.png" alt="" height="20"> -->
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium"></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <i class="fas fa-user fa-2x"></i>
                                    <h5 class="mt-2" >INICIA SESIÓN</h5>
                                </div>
                                <div class="p-2 mt-4">
                                   
                                    <form action="" method="post" id="frmLogin">
                                        <div class="mb-3">
                                            <label for="usuario" class="form-label">
                                                <i class="fas fa-user"></i> Usuario
                                            </label>
                                            <input type="text" class="form-control" id="usuario" name="usuario">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="clave"><i class="fas fa-key"></i> Contraseña</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" name="clave" id="clave">
                                                <!-- <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                                    <i class="ri-eye-fill align-middle"></i>
                                                </button> -->
                                            </div>
                                        </div>

                                        <div class="alert alert-danger text-center d-none" id="alerta" role="alert">

                                        </div>

                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Recordar</label>
                                        </div> -->

                                        <div class="mt-4">
                                            <button name="btningresar" class="btn btn-success w-100" type="submit" onclick="frmLogin(event);">
                                                Ingresar
                                            </button>
                                        </div>
                                    </form>
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
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url; ?>Assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/plugins.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/plugins.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

    <script>
        const base_url = "<?php echo base_url; ?>"
    </script>

    <!-- particles js -->
    <script src="<?php echo base_url; ?>Assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="<?php echo base_url; ?>Assets/js/pages/particles.app.js"></script>

    <script src="<?php echo base_url; ?>Assets/js/funciones.js"></script>

    <!-- password-addon init -->
    <script src="<?php echo base_url; ?>Assets/js/pages/password-addon.init.js"></script>
</body>


</html>