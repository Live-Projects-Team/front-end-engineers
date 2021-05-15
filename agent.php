<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon/favicon.ico" type="image/x-icon">
    <title>Live-Pesa</title>
    <link rel="stylesheet" href="./bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Questrial&family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">


    <!-- agent CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .dp_account {
            height: 100px;
            width: 100px;
            margin: 0 auto;
            border-radius: 100%;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-glass fixed-top">

        <a class="navbar-brand" href="./home.html">
            <span class="first">livepesa</span>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./personal.html">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Get App</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" style="margin-right: 30px;" id="regiser_login_button">
                <li class="nav-item active">
                    <button type="button" class="btn btn-glass" style="color: white; padding: 10px 40px 10px 40px;">Login</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-light" style="color: #32289b;margin-left: 10px; padding: 10px 40px 10px 40px;">Get Started</button>
                </li>

            </ul>
        </div>

    </nav>
    <br>



    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <div class="tab-pane active" id="my_account">
                    <div class="container name_image bg-personal">
                        <div style="height: 150px; width: 100%;">
                            <img src="./images/placeholders/live-pesa-placeholder-avatar.png" class="dp_account" alt="displayPicture">
                        </div>
                        <div style="margin-top: 0px;">
                            <span style="font-size: 2vw;">Agent Name</span>
                            <br>
                            <span style="color: grey;">yourname@example.com</span>
                            <br>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                <h3><a href="">Trasaction</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                <h3><a href="">Account Information</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                <h3><a href="">Code Withdrawal</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                <h3><a href="">Commision</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                <h3><a href="">Agents Bonus</a></h3>
                            </div>
                        </div>

    </section>

    <footer class="container-fluid live_pesa_footer">

        <div class="row" style="margin-top: 30px;">

            <div class="col-sm" style="text-align: center;">
                <span class="first" style="font-size: 30px;">livepesa</span>
                <div class="container" style="padding-top: 30px;">
                    <div class="row">
                        <div class="col-sm"><a href="#" footericons><i class="fa fa-twitter"></i></a></div>
                        <div class="col-sm"><a href="#" footericons><i class="fa fa-linkedin"></i></a></div>
                        <div class="col-sm"><a href="#" footericons><i class="fa fa-instagram"></i></a></div>
                        <div class="col-sm"><a href="https://github.com/Live-Projects-Team" footericons><i class="fa fa-github"></i></a></div>
                    </div>
                </div>





            </div>

            <div class="col-sm">
                <span class="footer_header">Services</span>
                <br>
                <ul class="footer_ul">

                    <a href="#">
                        <li>Pay Bills</li>
                    </a>
                    <a href="#">
                        <li>Get Loan</li>
                    </a>
                    <a href="#">
                        <li>Send Money</li>
                    </a>
                    <a href="#">
                        <li>Bank transactions</li>
                    </a>
                    <a href="#">
                        <li>Government Payments</li>
                    </a>
                </ul>
            </div>

            <div class="col-sm">
                <span class="footer_header">Learn More</span>
                <br>
                <ul class="footer_ul">
                    <a href="#">
                        <li>Get Loan</li>
                    </a>
                    <a href="#">
                        <li>Send Money</li>
                    </a>
                    <a href="#">
                        <li>Bank transactions</li>
                    </a>
                    <a href="#">
                        <li>Download App</li>
                    </a>
                </ul>
            </div>

            <div class="col-sm">
                <span class="footer_header">Company</span>
                <br>
                <ul class="footer_ul">
                    <a href="#">
                        <li>About Us</li>
                    </a>
                    <a href="#">
                        <li>Blog</li>
                    </a>
                    <a href="#">
                        <li>Careers</li>
                    </a>
                    <a href="#">
                        <li>Customers</li>
                    </a>
                    <a href="#">
                        <li>Media</li>
                    </a>
                </ul>
            </div>

            <div class="col-sm">
                <span class="footer_header">Legal</span>
                <br>
                <ul class="footer_ul">
                    <a href="#">
                        <li>Privacy policy</li>
                    </a>
                    <a href="#">
                        <li>Terms & conditions</li>
                    </a>
                    <a href="#">
                        <li>Cookies</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="row" style="margin-top: 30px; padding-bottom: 10px;">

            <span style="text-align: center; color: #cfcfcf; font-size: smaller;"> &copy; <?php echo date("Y");?> All rights reserved. <b style="font-family: 'Josefin Sans', sans-serif;">livepesa</b>  and all its trademarks are owned by LIVE PROJECT TEAM</span>

        </div>
    </footer>


    <script src="./bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>

    <!-- Agent tools JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>