<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Defi trading</title>
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
                                            <img src="assets/img/logo2.png" alt="">
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
                                            </li>

                                            <!-- <li class="nav-item dropdown show">
                                                <a class="nav-link dropdown-toggle" href="#" id="blogDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Blog
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                                    <a class="dropdown-item" href="blog-1.html">Blog 01</a>
                                                    <a class="dropdown-item" href="blog-2.html">Blog 02</a>
                                                    <a class="dropdown-item" href="blog-3.html">Blog 03</a>
                                                    <a class="dropdown-item" href="blog-4.html">Blog 04</a>
                                                    <a class="dropdown-item" href="blog-details.html">Blog details 1</a>
                                                    <a class="dropdown-item" href="blog-details-2.html">Blog details
                                                        2</a>
                                                </div>
                                            </li> -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.php">contact</a>
                                            </li>
                                            <li class="nav-item join-now-btn">
                                                <a class="nav-link" href="register.php">Join Now</a>
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
                <div class="row justify-content-lg-around">
                    <div class="col-xl-9 col-lg-7 col-8">
                        <div class="part-txt">
                            <h1>Affiliate Program</h1>
                            <ul>
                                <li>home</li>
                                <li>Affiliate</li>
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

        <!-- refferal commission begin -->
        <div class="refferal-commision">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title">
                            <span class="sub-title">
                                Refferal Marketing
                            </span>
                            <h2>
                                The Biggest Refferal<span class="special"> Commissions</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                        <div class="single-commision">
                            <div class="part-icon">
                                <img src="assets/img/refferal/5.png" alt="">
                            </div>
                            <div class="part-text">
                                <span class="title">First Line</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                        <div class="single-commision">
                            <div class="part-icon">
                                <img src="assets/img/refferal/25.png" alt="">
                            </div>
                            <div class="part-text">
                                <span class="title">Second Line</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                        <div class="single-commision">
                            <div class="part-icon">
                                <img src="assets/img/refferal/50.png" alt="">
                            </div>
                            <div class="part-text">
                                <span class="title">Third Line</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                        <div class="single-commision">
                            <div class="part-icon">
                                <img src="assets/img/refferal/75.png" alt="">
                            </div>
                            <div class="part-text">
                                <span class="title">Fourth Line</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- refferal commission end -->

        <!-- affiliate begin -->
        <div class="affiliate">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="part-para">
                            <div class="section-title">
                                <span class="sub-title">
                                    Our Awesome Affiliates
                                </span>
                                <h2>
                                    Defi's Best <span class="special">affiliate</span> Programs
                                </h2>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                etteme dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh voluptate
                                velit esse cillum doloreeu fugiat nulla pariatur occaecat non proident.
                            </p>

                            <img src="assets/img/affiliate/img-1.jpg" class="text-img" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                etteme dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in repreh voluptate velit esse cillum doloreeu fugiat nulla pariatur
                                occaecat non proident, sunt inner culpa qui officia repreh voluptate velit esse cillum
                                dolore occaecat non proident.</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                etteme dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="part-affilate-feature">
                            d
                            <div class="single-feature">
                                <div class="icon-box">
                                    <div class="part-icon">
                                        <img src="assets/img/affiliate/conversion-rate.png" alt="">
                                    </div>
                                </div>
                                <div class="part-text">
                                    <h3 class="title">Unbeatable Conversion Rate</h3>
                                    <p>Lorem ipsum dolor sitamet, consectetur adipscing elitse labore et dolore magna
                                        aliqua minim nostrud exercitaton.</p>
                                </div>
                            </div>
                            <div class="single-feature">
                                <div class="icon-box">
                                    <div class="part-icon">
                                        <img src="assets/img/affiliate/digital-marketing.png" alt="">
                                    </div>
                                </div>
                                <div class="part-text">
                                    <h3 class="title">Marketing Tools</h3>
                                    <p>Lorem ipsum dolor sitamet, consectetur adipscing elitse labore et dolore magna
                                        aliqua minim nostrud exercitaton.</p>
                                </div>
                            </div>
                            <div class="single-feature">
                                <div class="icon-box">
                                    <div class="part-icon">
                                        <img src="assets/img/affiliate/advertising.png" alt="">
                                    </div>
                                </div>
                                <div class="part-text">
                                    <h3 class="title">Bonus &amp; Promotions</h3>
                                    <p>Lorem ipsum dolor sitamet, consectetur adipscing elitse labore et dolore magna
                                        aliqua minim nostrud exercitaton.</p>
                                </div>
                            </div>
                            <div class="single-feature">
                                <div class="icon-box">
                                    <div class="part-icon">
                                        <img src="assets/img/affiliate/commission.png" alt="">
                                    </div>
                                </div>
                                <div class="part-text">
                                    <h3 class="title">High Commissions</h3>
                                    <p>Lorem ipsum dolor sitamet, consectetur adipscing elitse labore et dolore magna
                                        aliqua minim nostrud exercitaton.</p>
                                </div>
                            </div>
                            <div class="single-feature">
                                <div class="icon-box">
                                    <div class="part-icon">
                                        <img src="assets/img/affiliate/payment-method.png" alt="">
                                    </div>
                                </div>
                                <div class="part-text">
                                    <h3 class="title">Fast Payments</h3>
                                    <p>Lorem ipsum dolor sitamet, consectetur adipscing elitse labore et dolore magna
                                        aliqua minim nostrud exercitaton.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="affiliate-how-to-do">
                    <h2 class="title">How It Works</h2>
                    <div class="single-affiliate">
                        <div class="part-icon">
                            <span class="sr-num">1</span>
                            <img src="assets/img/affiliate/icon-6.png" alt="">
                        </div>
                        <div class="part-text">
                            <p>You display our banner<br> or link on your website</p>
                        </div>
                    </div>
                    <div class="single-affiliate">
                        <div class="part-icon">
                            <span class="sr-num">2</span>
                            <img src="assets/img/affiliate/icon-7.png" alt="">
                        </div>
                        <div class="part-text">
                            <p>Visitor clicks on the<br> banner or link</p>
                        </div>
                    </div>
                    <div class="single-affiliate">
                        <div class="part-icon">
                            <span class="sr-num">3</span>
                            <img src="assets/img/affiliate/icon-8.png" alt="">
                        </div>
                        <div class="part-text">
                            <p>Our system tracks<br> your unique URL</p>
                        </div>
                    </div>
                    <div class="single-affiliate">
                        <div class="part-icon">
                            <span class="sr-num">4</span>
                            <img src="assets/img/affiliate/icon-9.png" alt="">
                        </div>
                        <div class="part-text">
                            <p>The player makes<br> a deposit</p>
                        </div>
                    </div>
                    <div class="single-affiliate">
                        <div class="part-icon">
                            <span class="sr-num">5</span>
                            <img src="assets/img/affiliate/icon-10.png" alt="">
                        </div>
                        <div class="part-text">
                            <p>You receive a<br> commission
                            </p>
                        </div>
                    </div>
                </div>
                <div class="part-para">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <h2 class="title">Highest Conversion Rates</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                ette dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris
                                nisi ut aliq ex ea commodo consequat. Duis aute irure
                                dolor in repreh voluptate velit esse cillum dolore fugiat nulla pariatur occaecat non
                                proident, sunt inner culpa qui officia repreh voluptate esse cillum dolore occaecat non
                                proident.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                ette dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris
                                nisi ut aliq ex ea commodo consequat. Duis aute irure
                                dolor in repreh voluptate velit esse cillum dolore fugiat nulla pariatur occaecat non
                                proident, sunt inner culpa qui officia repreh voluptate esse cillum dolore occaecat non
                                proident.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                ette dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris
                                nisi ut aliq ex ea commodo consequat. Duis aute irure
                                dolor in repreh voluptate velit esse cillum dolore fugiat nulla pariatur occaecat non
                                proident, sunt inner culpa qui officia repreh voluptate esse cillum dolore occaecat non
                                proident.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore
                                ette dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="btn-hyipox-2">
                                <i class="fas fa-plus"></i> Sing Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- affiliate end -->

        <!-- footer begin -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="about-widget">
                                <a href="index.html" class="logo">
                                    <img src="assets/img/IMG-20240408-WA0063.jpg" alt="">
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
                            <p>Copyright © <a href="index.html">Defi</a> - 2024. All Rights Reserved
                            </p>
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
    <script src="assets/js/popper.min.js"></script>
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


<!-- Mirrored from iamubaidah.com/html/oitila/live/affiliate.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:28:05 GMT -->

</html>