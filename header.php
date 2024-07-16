<!DOCTYPE html>
<html dir="ltr" class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Rmmc">
    <meta name="description" content="Rmmc - Events and News">
    <meta name="keywords" content="Rmmc - Events and News">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modules for routes below -->
    <script type="module" src="./scripts/fetch/news/index.js"></script>
    <script type="module" src="./scripts/fetch/school/school-list-display.js"></script>
    <script type="module" src="./scripts/fetch/students/students-by-exam-display.js"></script>
    <script type="module" src="./scripts/fetch/exam/examdate-list-display.js"></script>

    <!--LINK FOR STYLE newPage.css-->
    <link rel="stylesheet" href="styles/newsPage.css">

    <style>
        * {
            font-family: "Jost";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: url('assets/img/FGMNEW.png');
        }

        .respo {
            width: 100%;
            height: auto;
        }

        .cont {
            height: auto;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }



        h1,
        h2 {
            text-align: center;
            text-decoration: underline;
        }

        ul {
            list-style: none;
            padding: 0;
            list-style-type: disc;
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 768px) {
            .container {
                max-width: calc(var(--main-container) + var(--container-gutters));
                padding-left: calc(var(--container-gutters) / 2);
                padding-right: calc(var(--container-gutters) / 2);
            }

            .header-top {
                width: 20%;
            }
        }

        @media only screen and (max-width: 480px) {
            header {
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }
        }

        @media only screen and (min-width: 870px) {


            .header-top {
                width: 20%;
            }
        }

        .topnav {
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: gray;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 13px;
        }

        .topnav a:hover {
            background-color: white;
            color: blue;
        }

        .topnav a.active {
            color: white;
        }

        .description1 {
            font-family: "sans-serif";
            font-size: 110%;
            text-align: center;
        }

        .description2 {
            font-size: 100%;
            text-align: center;
        }

        .description3 {
            font-size: 100%;
            font-family: "sans-serif";
            text-transform: capitalize;
            text-decoration: underline;
        }

        .centertab {
            margin-left: auto;
            margin-right: auto;
        }

        .header-top {
            width: 100%;
            background: #0D5EF4;
            padding: 5px 0;
        }

        .header-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
        }

        .header-links ul {

            display: flex;
            gap: 15px;
        }

        .header-links ul li {
            color: white;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .header-social {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .sticky-wrapper {
            position: sticky;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .menu-area {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .menu-area .container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
        }

        .header-logo img {
            max-height: 50px;
        }

        .main-menu {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .main-menu ul {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .main-menu li {
            position: relative;
        }

        .main-menu li a {
            text-decoration: none;
            color: #333;
            padding: 10px 15px;
            display: block;
        }

        .main-menu li a:hover,
        .main-menu li a:focus {
            background: #f1f1f1;
            border-radius: 5px;
        }

        .menu-item-has-children ul {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            list-style: none;
            padding: 15px;
        }

        .menu-item-has-children:hover ul {
            border-radius: 15px;
            display: block;
        }

        .menu-item-has-children ul li {
            width: 250px;
        }

        .menu-item-has-children ul li i {
            color: blue;
        }

        .menu-item-has-children ul li a {
            padding: 10px 20px;
            white-space: nowrap;
        }

        .as-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .main-menu {
                display: none;
            }

            .as-menu-toggle {
                display: block;
            }

            .as-mobile-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                list-style: none;
                padding: 0;
            }

            .as-mobile-menu ul {
                list-style: none;
            }

            .as-mobile-menu li {
                padding: 10px;
                border-bottom: 1px solid #f1f1f1;
            }

            .as-mobile-menu li a {
                color: #333;
                text-decoration: none;
                display: block;
            }

            .as-mobile-menu li a:hover,
            .as-mobile-menu li a:focus {
                background: #f1f1f1;
            }
        }
    </style>
</head>

<body>
    <div class="header-top">
        <div class="container">
            <div class="header-links">
                <ul>
                    <li><i class="fal fa-phone"></i><a href="tel:+256214203215">+63 83 5523348</a></li>
                    <li class="d-none d-xl-inline-block"><i class="fal fa-location-dot" target="_block"><a
                                href="https://www.google.com/maps/@6.1117421,125.1725222,3a,75y,198.74h,85.78t/data=!3m6!1e1!3m4!1stmVcsnfjnT2cl5WyuCHmwQ!2e0!7i16384!8i8192?coh=205409&entry=ttu"
                                target="_block"></i>Pioneer Ave.,
                        GSC, South Cotabato, Philippines</li></a>
                    <li><i class="fal fa-clock"></i>contactus@rmmc.edu.ph</li>
                </ul>
                <div class="header-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="header-logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <nav class="main-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="menu-item-has-children"><a href="news.php">Admission</a>
                            <ul>
                                <li><a href="school1.php"><i class="fa fa-book" aria-hidden="true"></i> Requirements</a>
                                </li>
                                <li><a href="school2.php"><i class="fa fa-book" aria-hidden="true"></i> Registration</a>
                                </li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i> Enrollment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Academics</a>
                            <ul>
                                <li><a href="school1.php"><i class="fa fa-book" aria-hidden="true"></i> College
                                        Graduates</a></li>
                                <li><a href="school2.php"><i class="fa fa-book" aria-hidden="true"></i> Colleges</a>
                                </li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i> ETEEAP</a></li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i> TECHVOC</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="events.php">News & Gallery</a>
                            <ul>
                                <li><a href="school1.php"><i class="fa fa-book" aria-hidden="true"></i> News</a></li>
                                <li><a href="school2.php"><i class="fa fa-book" aria-hidden="true"></i> Gallery</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="news.php">Student</a>
                            <ul>
                                <li><a href="school1.php"><i class="fa fa-book" aria-hidden="true"></i> Portal Login</a>
                                </li>
                                <li><a href="school2.php"><i class="fa fa-book" aria-hidden="true"></i> LMS Login</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="news.php">Services</a>
                            <ul>
                                <li><a href="school1.php"><i class="fa fa-book" aria-hidden="true"></i> Research</a>
                                </li>
                                <li><a href="school2.php"><i class="fa fa-book" aria-hidden="true"></i> Student
                                        Affairs</a></li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i>
                                        Internationalization</a></li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i> Community
                                        Extension</a></li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i> Alumni
                                        Affairs</a></li>
                                <li><a href="school3.php"><i class="fa fa-book" aria-hidden="true"></i> Library</a></li>
                            </ul>
                        </li>
                        <li><a href="news.php">Contact Us</a></li>

                    </ul>
                </nav>

            </div>

        </div>
    </div>
</body>

</html>