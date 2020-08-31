<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo-icon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/animated-headline.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/appli/css/style.css">
    <link href="<?= base_url() ?>/assets/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/plugins/fontawesome/css/brands.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/plugins/fontawesome/css/solid.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url() ?>/assets/appli/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?= site_url('home') ?>"><img src="<?= base_url() ?>/assets/appli/img/logo/logo.png" alt="" width="170"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="<?= site_url('home') ?>">Home</a></li>
                                                <li><a href="#">Features</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-65">
                                        <a href="<?= site_url('login') ?>" class="border-btn">Log in</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Selamat Datang Di Landing Page Apotek APP</h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">Sebuah aplikasi untuk memanajemen apotek</p>
                                    <a href="<?= site_url('login') ?>" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.7s">Menuju Panel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Mulai Bisnis Apotek Mu</h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">Dengan menggunakan aplikasi ini dapat mempermudah memanjemen apotek</p>
                                    <a href="<?= site_url('login') ?>" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.7s">Menuju Panel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <div class="project-screen">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="screen-img">
                            <img src="<?= base_url() ?>/assets/appli/img/gallery/screen.png" alt="" class=" w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--? Our Services Start -->
        <section class="our-services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Finally focus on my marketing strategy and delegate</h2>
                            <p>In the old days, your website was the same for everyone. Not anymore. Experiences lets you adapt your website for every audience.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="<?= base_url() ?>/assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="<?= base_url() ?>/assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="<?= base_url() ?>/assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="<?= base_url() ?>/assets/img/icon/services4.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="<?= base_url() ?>/assets/img/icon/services5.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="<?= base_url() ?>/assets/img/icon/services6.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Services End -->




    </main>
    <footer>
        <div class="footer-wrappper section-bg" data-background="<?= base_url() ?>/assets/img/gallery/footer-bg.png">

            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> Milzan Malik | Template made by Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="<?= base_url() ?>/assets/appli/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url() ?>/assets/appli/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url() ?>/assets/appli/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url() ?>/assets/appli/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url() ?>/assets/appli/js/wow.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/animated.headline.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="<?= base_url() ?>/assets/appli/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url() ?>/assets/appli/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="<?= base_url() ?>/assets/appli/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="<?= base_url() ?>/assets/appli/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="<?= base_url() ?>/assets/appli/js/contact.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/jquery.form.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/mail-script.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url() ?>/assets/appli/js/plugins.js"></script>
    <script src="<?= base_url() ?>/assets/appli/js/main.js"></script>

</body>

</html>