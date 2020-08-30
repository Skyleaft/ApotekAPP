<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Apotek APP</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo-icon.png">

    <link href="<?= base_url() ?>/assets/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/plugins/fontawesome/css/brands.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/plugins/fontawesome/css/solid.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url() ?>/assets/plugins/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url() ?>/assets/plugins/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- CSS Libraries -->
    <link href="<?= base_url() ?>/assets/css/bootstrap-social.css" rel="stylesheet" type="text/css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/stislastyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/stislacomponents.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-8 col-12 order-lg-1 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url() ?>/assets/images/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 order-lg-2 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <a href="<?= site_url('uts') ?>">
                            <img src="<?= base_url() ?>/assets/images/logo-icon.png" alt="logo" width="110" class="shadow-light rounded-circle mb-5 mt-2" style="margin-left: auto;margin-right: auto;display: block;">
                        </a>
                        <h4 class="text-dark font-weight-normal">Halaman Login <span class="font-weight-bold">Apotek APP</span></h4>
                        <?= form_open('login/cekuser', ['class' => 'formlogin']) ?>
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" value="" tabindex="1" autofocus>
                            <div class="invalid-feedback errorUser">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" value="" tabindex="2">
                            <div class="invalid-feedback errorPass">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <a href="auth-forgot-password.html" class="float-left mt-3">
                                Forgot Password?
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4" name="btn_login">
                                Login
                            </button>
                        </div>
                        <?= form_close(); ?>

                        <div class="text-center mt-4 mb-3">
                            <div class="text-job text-muted">Login With Social</div>
                        </div>
                        <div class="row sm-gutters">
                            <div class="col-6">
                                <a class="btn btn-block btn-social btn-facebook">
                                    <span class="fab fa-facebook"></span> Facebook
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-block btn-social btn-twitter">
                                    <span class="fab fa-twitter"></span> Twitter
                                </a>
                            </div>
                        </div>

                        <div class="text-center mt-5 text-small">
                            Copyright &copy;2020 Milzan Malik
                            <div class="mt-2">
                                <a href="#">Privacy Policy</a>
                                <div class="bullet"></div>
                                <a href="#">Terms of Service</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/js/stislascripts.js"></script>
    <script src="<?= base_url() ?>/assets/js/stislacustom.js"></script>

    <!-- Page Specific JS File -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?= site_url("login/cekip") ?>",
                dataType: "json",
                success: function(response) {
                    if (response.sukses) {
                        document.getElementById('username').value = response.sukses.username;
                    }

                }
            });
            $('.formlogin').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        $('.btn_login').prop('disabled', true);
                        $('.btn_login').html('<i class="fa fa-spin fa-spinner"></i>');
                    },
                    complete: function() {
                        $('.btn_login').prop('disabled', false);
                        $('.btn_login').html('Login');
                    },
                    success: function(response) {
                        if (response.error) {
                            if (response.error.username) {
                                $('#username').addClass('is-invalid');
                                $('.errorUser').html(response.error.username);
                            } else {
                                $('#username').removeClass('is-invalid');
                                $('.errorUser').html('');
                            }

                            if (response.error.password) {
                                $('#password').addClass('is-invalid');
                                $('.errorPass').html(response.error.password);
                            } else {
                                $('#password').removeClass('is-invalid');
                                $('.errorPass').html('');
                            }
                        }
                        if (response.sukses) {
                            window.location = response.sukses.link;
                        }
                    },
                    error: function(xhr, ajaxOptions, thorwnError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                    }
                });
            })
        });
    </script>

</body>

</html>