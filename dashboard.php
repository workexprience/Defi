<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Defi Trading</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css" />
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css" />
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <!-- toastr js -->
    <link rel="stylesheet" href="assets/css/toastr.min.css" />
    <!-- data table -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.css" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
    <div class="notification-alert">
        <div class="notice-list"></div>
    </div>

    <!-- preloader begin-->
    <div class="preloader">
        <img src="assets/img/tenor.gif" alt="" />
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
                                            <span> <a href="#" class="login-btn">Login</a>or</span><a href="#"
                                                class="register-btn">Register</a>
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
                                            <img src="assets/img/logo2.png" alt="" />
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
                                            <img src="assets/img/member-1.jpg" alt="" />
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
                                                <div class="dropdown-menu" aria-labelledby="homeDropdown">
                                                    <a class="dropdown-item" href="index.html">Homepage 01</a>
                                                    <a class="dropdown-item" href="index-2.html">Homepage 02</a>
                                                    <a class="dropdown-item" href="index-3.html">Homepage 03</a>
                                                    <a class="dropdown-item" href="index-4.html">Homepage 04</a>
                                                    <a class="dropdown-item" href="index-5.html">Homepage 05</a>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="about.html">about us<span
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
                                                    <a class="dropdown-item" href="affiliate.html">Affiliate</a>
                                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                                    <a class="dropdown-item" href="error.html">Error</a>
                                                    <a class="dropdown-item" href="privacy-policy.html">privacy &
                                                        policy</a>
                                                    <a class="dropdown-item" href="transaction.html">transaction</a>
                                                    <a class="dropdown-item" href="login.html">Login</a>
                                                    <a class="dropdown-item" href="register.html">Register</a>
                                                </div>
                                            </li>
                                            <!-- 
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
                                <li>Dashboard</li>
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
                                <img src="assets/img/member-1.jpg" alt="" />
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
                                <a class="nav-link active" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="db-investment.php">Investment</a>
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
                                    <img src="assets/img/icon/002-cash.png" alt="" />
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
                                    <img src="assets/img/icon/003-credit-card.png" alt="" />
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
                                    <img src="assets/img/icon/001-donation.png" alt="" />
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
                                    <img src="assets/img/icon/004-hourglass.png" alt="" />
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
                                    <img src="assets/img/icon/005-percentage.png" alt="" />
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
                                    <img src="assets/img/icon/006-wage.png" alt="" />
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
                                    <img src="assets/img/icon/007-referral.png" alt="" />
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
                                    <img src="assets/img/icon/008-transfer.png" alt="" />
                                </div>
                                <div class="part-info">
                                    <span class="number">$534.00</span>
                                    <span class="text">Fund Transfer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-4 benmathew-col">
                        <h3 class="title">Users Logs</h3>
                        <div class="user-benmathew">
                            <div class="single-data">
                                <span class="title">Registration Date</span>
                                <span class="data">Sep-10-2014 11:20:37</span>
                            </div>
                            <div class="single-data">
                                <span class="title">Last Login</span>
                                <span class="data">Jul-05-2019 07:06:36</span>
                            </div>
                            <div class="single-data">
                                <span class="title">Current Login</span>
                                <span class="data">Jul-06-2019 02:47:23</span>
                            </div>
                            <div class="single-data">
                                <span class="title">Last Access IP</span>
                                <span class="data">27.57.18.1</span>
                            </div>
                            <div class="single-data">
                                <span class="title">Current Access IP</span>
                                <span class="data">122.175.131.51</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 chart-col">
                        <div class="transaction-chart">
                            <h3 class="title">Transaction & Deposit</h3>
                            <div class="charts-for-misco">
                                <canvas id="chart-0"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="transactions-table">
                            <h3 class="title">Recent Transaction History</h3>
                            <div class="table-responsive">
                                <table id="example" class="display misco-data-table" style="width: 100%">
                                    <!-- <thead>
                      <tr>
                        <th>BetID</th>
                        <th>Game</th>
                        <th>Coin</th>
                        <th>Bet</th>
                        <th>Time</th>
                        <th>Profit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sydney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                      </tr>
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sydney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                      </tr>
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                      </tr>
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                      </tr>
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                      </tr>
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                      </tr>
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                      </tr>
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                      </tr>
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                      </tr>
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                      </tr>
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                      </tr>
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                      </tr>
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                      </tr>
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                      </tr>
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                      </tr>
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                      </tr>
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                      </tr>
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                      </tr>
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                      </tr>
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                      </tr>
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                      </tr>
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                      </tr>
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                      </tr>
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                      </tr>
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                      </tr>
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                      </tr>
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot> -->
                                </table>
                            </div>
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
                                    <img src="assets/img/IMG-20240408-WA0063.jpg" alt="" />
                                </a>
                                <p>

                                    Defi trading is one of the world's largest investment companies, offering a large
                                    selection of low-cost mutual funds, ETFs, advice, and related services.
                                </p>
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
                                <h4 class="title">Useful links</h4>
                                <ul>
                                    <li>
                                        <a href="about.php" class="single-link"> About Us </a>
                                    </li>
                                    <li>
                                        <a href="affiliate.php" class="single-link"> Affiliate </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link"> Pricing Plan </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link"> Profit </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link"> Terms & Policy </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10">
                            <div class="newsletter-widget">
                                <h4 class="title">Subscribe To Our Newsletter</h4>
                                <form class="newsletter-form">
                                    <input type="text" placeholder="Enter Your Mail Address" />
                                    <button class="def-btn def-small">Subscribe</button>
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
                            <p>
                                Copyright © <a href="index.html">Defi</a> - 2024. All Rights
                                Reserved
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
                        <img src="assets/img/svg/profile.svg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <img src="assets/img/svg/money-transfering.svg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <img src="assets/img/svg/calculator.svg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#header">
                        <img src="assets/img/svg/arrow.svg" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-xl-block d-lg-block d-none">
        <div class="back-to-top-btn">
            <a href="#">
                <img src="assets/img/svg/arrow.svg" alt="" />
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
    <!-- chart js -->
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/chart-activate.js"></script>
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

<!-- Mirrored from iamubaidah.com/html/oitila/live/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:27:55 GMT -->

</html>