<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from iamubaidah.com/html/oitila/live/db-investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:27:55 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defi Trading Investment</title>
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
    <!-- data table -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
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
                                                </a>

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
                                            <!-- 
                                            <li class="nav-item dropdown show">
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
        <div class="breadcrumb-oitila db-breadcrumb">
            <div class="container">
                <div class="row justify-content-lg-around">
                    <div class="col-xl-6 col-lg-7 col-md-5 col-sm-6 col-8">
                        <div class="part-txt">
                            <h1>User Dashboard</h1>
                            <ul>
                                <li>home</li>
                                <li>Investment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7 col-sm-6 col-4 d-flex align-items-center">
                        <div class="db-user-profile">
                            <div class="part-data">
                                <span class="name">Sadwel Eunton</span>
                                <ul>
                                    <li>
                                        <span class="text">Invest</span>
                                        <span class="number">$100</span>
                                    </li>
                                    <li>
                                        <span class="text">Earings</span>
                                        <span class="number">$250</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-img">
                                <img src="assets/img/member-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- account begin -->
        <div class="user-dashboard">
            <div class="container">

                <div class="dashboard-menu">
                    <nav>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="db-investment.php">Investment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="db-withdraw.php">Withdraw</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="db-history.php">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="db-referral.php">Referrals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="db-settings.php">Settings</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="user-statics">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/002-cash.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$9,568.00</span>
                                    <span class="text">Ultimate Balance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/003-credit-card.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$7,480.00</span>
                                    <span class="text">Total Payout</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/001-donation.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$24k.00</span>
                                    <span class="text">Deposits Total</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/004-hourglass.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$242.00</span>
                                    <span class="text">Pending Amount</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/005-percentage.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$465.00</span>
                                    <span class="text">Interest Earn</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/006-wage.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$158.00</span>
                                    <span class="text">Total Earning</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/007-referral.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$814.00</span>
                                    <span class="text">Referral Earings</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-statics">
                                <div class="part-icon">
                                    <img src="assets/img/icon/008-transfer.png" alt="">
                                </div>
                                <div class="part-info">
                                    <span class="number">$534.00</span>
                                    <span class="text">Fund Transfer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="title">
                    Select Your Favourite Plan
                </h3>

                <div class="d-none">
                    <div class="icon-completed">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6"
                                stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"></circle>
                            <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6"
                                stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 ">
                            </polyline>
                        </svg>
                    </div>
                </div>

                <div class="select-plan">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                            <div class="single-plan">
                                <h3>Basic Plan</h3>
                                <div class="plan-icon">
                                    <img class="icon-img" src="assets/img/icon/bronze-medal.png" alt="">
                                </div>
                                <div class="price-info">
                                    <span class="parcent">$10</span>
                                    <span class="price">99%<small> || per month</small></span>
                                </div>
                                <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                            <div class="single-plan">
                                <h3>Basic Plan</h3>
                                <div class="plan-icon">
                                    <img class="icon-img" src="assets/img/icon/bronze-medal.png" alt="">
                                </div>
                                <div class="price-info">
                                    <span class="parcent">$10</span>
                                    <span class="price">99%<small> || per month</small></span>
                                </div>
                                <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                            <div class="single-plan">
                                <h3>Basic Plan</h3>
                                <div class="plan-icon">
                                    <img class="icon-img" src="assets/img/icon/bronze-medal.png" alt="">
                                </div>
                                <div class="price-info">
                                    <span class="parcent">$10</span>
                                    <span class="price">99%<small> || per month</small></span>
                                </div>
                                <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                            <div class="single-plan">
                                <h3>Basic Plan</h3>
                                <div class="plan-icon">
                                    <img class="icon-img" src="assets/img/icon/bronze-medal.png" alt="">
                                </div>
                                <div class="price-info">
                                    <span class="parcent">$10</span>
                                    <span class="price">99%<small> || per month</small></span>
                                </div>
                                <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                            <div class="single-plan">
                                <h3>Basic Plan</h3>
                                <div class="plan-icon">
                                    <img class="icon-img" src="assets/img/icon/bronze-medal.png" alt="">
                                </div>
                                <div class="price-info">
                                    <span class="parcent">$10</span>
                                    <span class="price">99%<small> || per month</small></span>
                                </div>
                                <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                            <div class="single-plan">
                                <h3>Basic Plan</h3>
                                <div class="plan-icon">
                                    <img class="icon-img" src="assets/img/icon/bronze-medal.png" alt="">
                                </div>
                                <div class="price-info">
                                    <span class="parcent">$10</span>
                                    <span class="price">99%<small> || per month</small></span>
                                </div>
                                <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <h3 class="title">
                            Add New Card
                        </h3>
                        <div class="add-credit-card card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Card Number</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="•••• •••• •••• ••••">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail4">Name on Card</label>
                                                <input type="email" class="form-control" id="exampleInputEmail4"
                                                    aria-describedby="emailHelp" placeholder="Farzana Mukta">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group expire-date-elem">
                                                <label for="inputDate">Expire date</label>
                                                <div class="form-row">
                                                    <div class="form-group col-xl-6 col-lg-6 col-6">
                                                        <input type="text" class="form-control" id="inputdate"
                                                            placeholder="MM">
                                                    </div>
                                                    <div class="form-group col-xl-6 col-lg-6 col-6">
                                                        <input type="text" class="form-control" id="inputZip"
                                                            placeholder="YY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail4">Card Code</label>
                                                <input type="email" class="form-control" id="exampleInputEmail4"
                                                    aria-describedby="emailHelp" placeholder="CVC">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-hyipox-medium btn-add-new-card">Add New
                                        Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <h3 class="title">
                            Enter Your Amount
                        </h3>
                        <div class="last-step">
                            <div>
                                <label>Enter Your Amount</label>
                                <form>
                                    <span class="currency-symbol" id="basic-addon1">$</span>
                                    <input type="text" class="inputted-amount" value="10">
                                    <button class="dropdown-toggle displayed-selected-currency" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        USD
                                    </button>
                                    <div class="dropdown-menu currency-select-list"
                                        aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item single-currency-select selected-currency active"
                                            href="#" data-currency="usd">USD</a>
                                        <a class="dropdown-item single-currency-select" href="#"
                                            data-currency="eur">EUR</a>
                                        <a class="dropdown-item single-currency-select" href="#"
                                            data-currency="btc">BTC</a>
                                        <a class="dropdown-item single-currency-select" href="#"
                                            data-currency="eth">ETH</a>
                                    </div>
                                </form>
                                <label>Select Your Payment Method</label>
                                <div class="dropdown show">

                                    <a class="dropdown-toggle displayed-selected-plan" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="payment-method-icon">
                                            <img src="assets/img/currency/001-bitcoin.png" alt="">
                                        </span>
                                        Bitcoin (CryptoCurrency)
                                    </a>
                                    <div class="dropdown-menu plan-select-list" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item single-select-plan selected-plan active"
                                            href="#">Bitcoin (CryptoCurrency)</a>
                                        <a class="dropdown-item single-select-plan" href="#">Ethereum
                                            (CryptoCurrency)</a>
                                        <a class="dropdown-item single-select-plan" href="#">Usdt
                                            (CryptoCurrency)</a>
                                    </div>
                                </div>

                            </div>
                            <div class="calculation-content">
                                <h4 class="title">your calculation statement</h4>
                                <ul>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <span class="list-title">
                                            Total Percent
                                        </span>
                                        <span class="list-descr">250.00%</span>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <span class="list-title">
                                            Daily Profits
                                        </span>
                                        <span class="list-descr">$0.05</span>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <span class="list-title">
                                            Net Profit
                                        </span>
                                        <span class="list-descr">$25.00</span>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <span class="list-title">
                                            Total Return
                                        </span>
                                        <span class="list-descr">$35.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="finish-button">
                            <a href="#" class="btn-hyipox-2">Let it finish</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- account end -->

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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis commodi ut illum.
                                    Cumque, unde suscipit error!</p>
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
                                        <a href="#0" class="single-link">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi accusamus labore
                                    recusandae! Quia sint consectetur explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <p>Copyright © <a href="index.html">Oitila</a> - 2020. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

    </div> <!-- mobile navbar wrapper end -->

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
    <!-- utils for chart js -->
    <script src="assets/js/utils.js"></script>
    <!-- data table -->
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/data-able-active.js"></script>
    <!-- clock js -->
    <script src="assets/js/clock.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from iamubaidah.com/html/oitila/live/db-investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:27:56 GMT -->

</html>