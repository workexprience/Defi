<?php
if(isset($_POST['']))

?>













<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defi trading Investment</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- toastr js -->
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="notification-alert">
        <div class="notice-list">

        </div>
    </div>

    <!-- preloader begin-->
    <div class="preloader">
        <img src="assets/img/tenor.gif" alt="">
    </div>
    <!-- preloader end -->

    <div class="mobile-navbar-wrapper">

        <!-- header begin -->
        <div class="header header-style-4" id="header">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-3">
                            <div class="welcome-text">
                                <p>Welcome to Defi</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-9 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="part-right">
                                <ul>
                                    <li>
                                        <span class="simple-text">Sever Time : </span>
                                        <div class="server-time">
                                            <div class="single-time clock-time">
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                <span class="text">
                                                    <span id="hours"></span>
                                                    <span id="minutes"></span>
                                                    <span id="seconds"></span>
                                                </span>
                                            </div>
                                            <div class="single-time">
                                                <span class="icon">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                                <span class="text">
                                                    <span id="date"></span>
                                                    <span id="month"></span>
                                                    <span id="year"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-panel">
                                            <span>
                                                <a href="login.php" class="login-btn">Login</a>or</span><a
                                                href="register.php" class="register-btn">Register</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="row">
                                <div class="col-4 d-xl-none d-lg-none d-block">
                                    <button class="navbar-toggler" type="button">
                                        <span class="dag"></span>
                                        <span class="dag2"></span>
                                        <span class="dag3"></span>
                                    </button>
                                </div>
                                <div
                                    class="col-xl-12 col-lg-12 col-8 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="assets/img/IMG-20240408-WA0062.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="mainmenu">
                                <div class="d-xl-none d-lg-none d-block">
                                    <div class="user-profile">
                                        <div class="part-img">
                                            <img src="assets/img/member-1.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="user-name">Sadwel Eunton</span>
                                            <span class="user-balance">Bal : $202.25</span>
                                        </div>
                                        <div class="log-out-area">
                                            <a href="#">Log out</a>
                                        </div>
                                    </div>
                                </div>
                                <nav class="navbar navbar-expand-lg">

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown show">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    id="homeDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Home
                                                    <!-- </a>
                                                <div class="dropdown-menu" aria-labelledby="homeDropdown">
                                                    <a class="dropdown-item" href="index.html">Homepage 01</a>
                                                    <a class="dropdown-item" href="index-2.html">Homepage 02</a>
                                                    <a class="dropdown-item" href="index-3.html">Homepage 03</a>
                                                    <a class="dropdown-item" href="index-4.html">Homepage 04</a>
                                                    <a class="dropdown-item" href="index-5.html">Homepage 05</a>
                                                </div> -->
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="about.php">about us<span
                                                        class="sr-only">(current)</span></a>
                                            </li>

                                            <li class="nav-item dropdown show">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    id="db-Dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    dashboard
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="db-Dropdown">
                                                    <a class="dropdown-item" href="dashboard.php">My account</a>
                                                    <a class="dropdown-item" href="db-investment.php">Investment</a>
                                                    <a class="dropdown-item" href="db-withdraw.php">Withdraw</a>
                                                    <a class="dropdown-item" href="db-history.php">History</a>
                                                    <a class="dropdown-item" href="db-referral.php">Referrals</a>
                                                    <a class="dropdown-item" href="db-settings.php">Settings</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown show">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    pages
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                                    <a class="dropdown-item" href="affiliate.php">Affiliate</a>
                                                    <a class="dropdown-item" href="faq.php">Faq</a>
                                                    <a class="dropdown-item" href="error.php">Error</a>
                                                    <a class="dropdown-item" href="privacy-policy.php">privacy &
                                                        policy</a>
                                                    <a class="dropdown-item" href="transaction.php">transaction</a>
                                                    <a class="dropdown-item" href="login.php">Login</a>
                                                    <a class="dropdown-item" href="register.php">Register</a>
                                                </div>
                                                <!-- </li>

                                            <li class="nav-item dropdown show">
                                                <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Blog
                                                      </a>
                                                <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                                    <a class="dropdown-item" href="blog-1.html">Blog 01</a>
                                                    <a class="dropdown-item" href="blog-2.html">Blog 02</a>
                                                    <a class="dropdown-item" href="blog-3.html">Blog 03</a>
                                                    <a class="dropdown-item" href="blog-4.html">Blog 04</a>
                                                    <a class="dropdown-item" href="blog-details.html">Blog details 1</a>
                                                    <a class="dropdown-item" href="blog-details-2.html">Blog details 2</a>
                                                </div>
                                            </li> -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.php">contact</a>
                                            </li>
                                            <li class="nav-item join-now-btn">
                                                <a class="nav-link" href="register.php">Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- breadcrumb begin -->
        <div class="breadcrumb-oitila">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-8">
                        <div class="part-txt">
                            <h1>login</h1>
                            <ul>
                                <li>home</li>
                                <li>login page</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-4 d-flex align-items-center">
                        <div class="part-img">
                            <img src="assets/img/breadcrumb-img.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- login begin -->
        <div class="login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 col-md-7 col-sm-9">
                        <div class="form-area">
                            <div class="row no-gutters">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="login-form">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">remember me</label>
                                                <button class="btn-form">Submit</button>
                                            </div>
                                        </form>
                                        <div class="other-option">
                                            <a href="#">register now</a>
                                            <a href="#">forgot password?</a>
                                        </div>
                                        <div class="login-by-social">
                                            <a href="#" class="login-fb"><i class="fab fa-facebook-f"></i>Login with
                                                facefook</a>
                                            <a href="#" class="login-gl"><i class="fab fa-google"></i>Login with
                                                google</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 d-xl-block d-lg-block d-none">
                                    <div class="blank-space"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login end -->

        <!-- footer begin -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="about-widget">
                                <a href="index.html" class="logo">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                                <p>
                                    Defi trading is one of the world's largest investment companies, offering a large
                                    selection of low-cost mutual funds, ETFs, advice, and related services.</p>
                                <div class="social-links">
                                    <ul>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-10">
                            <div class="link-widget">
                                <h4 class="title">
                                    Useful links
                                </h4>
                                <ul>
                                    <li>
                                        <a href="about.php" class="single-link">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="affiliate.php" class="single-link">
                                            Affiliate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Pricing Plan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Profit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Terms & Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10">
                            <div class="newsletter-widget">
                                <h4 class="title">
                                    Subscribe To Our Newsletter
                                </h4>
                                <form class="newsletter-form">
                                    <input type="text" placeholder="Enter Your Mail Address">
                                    <button class="def-btn def-small">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <p>Copyright © <a href="index.html">Defi</a> - 2024. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

    </div>
    <!-- mobile navbar wrapper end -->

    <div class="d-xl-none d-lg-none d-block">
        <div class="mobile-navigation-bar">
            <ul>
                <li>
                    <a href="#0">
                        <img src="assets/img/svg/profile.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <img src="assets/img/svg/money-transfering.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <img src="assets/img/svg/calculator.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#header">
                        <img src="assets/img/svg/arrow.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-xl-block d-lg-block d-none">
        <div class="back-to-top-btn">
            <a href="#">
                <img src="assets/img/svg/arrow.svg" alt="">
            </a>
        </div>
    </div>

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper js -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- modal video js -->
    <script src="assets/js/jquery-modal-video.min.js"></script>
    <!-- slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- toastr js -->
    <script src="assets/js/toastr.min.js"></script>
    <!-- clock js -->
    <script src="assets/js/clock.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from iamubaidah.com/html/oitila/live/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:28:09 GMT -->

</html>