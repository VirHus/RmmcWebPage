
<!Doctype html>
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
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
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
    /* General Styles */
    body {
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-image: url('assets/img/FGMNEW.png');
      font-family: 'Roboto', sans-serif;
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
      .cont {
        max-width: 90%;
        margin: 10px auto;
        padding: 8px;
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

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAF50;
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

    /* Additional styles for layout and positioning */
    .header-top {
      background-color: #0d5ef4;
      padding: 10px 0;
    }

    .header-top .container {
        
        display: flex;
        flex-direction: row;
        justify-content: space-between
        align-items: center;
        column-gap: 500px;
        
        

    }

    .header-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: inline-block;
      align-items: center;
      color: white;
    }

    .header-links ul li {
      margin-right: 20px;
      font-size: 12px;
      color: white;
    }

    .header-links ul li a {
      text-decoration: none;
      color: white;
      
    }

    .header-links ul li i {
      color: white;
      
    }

    .header-social {
      display: inline-block;
      align-items: center;
      color: white;
    }

    .header-social .social-title {
      margin-right: 10px;
      font-size: 14px;
    }

    .header-social a {
      color: white;
      text-decoration: none;
      margin-right: 10px;
      font-size: 18px;
    }

    .header-logo img {
      max-width: 100px;
    }

    .menu-area {
      background-color: white;
      padding: 30px 0;
    }

    .menu-area .container {
        display: flex;
        flex-direction: row;
        justify-content: between;
        align-items: center;
        column-gap: 300px;
    }

    .main-menu ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: inline-block;
      

    }

    .main-menu ul li {
      position: relative;
      
    }

    .main-menu ul li a {
      color: black;
      text-decoration: none;
      padding: 10px 5px;
      display: block;
    }

    .main-menu ul li:hover .sub-menu {
      display: block;
    }

    .sub-menu {
      display: none;
      position: absolute;
      background-color: #444;
      min-width: 200px;
      z-index: 1;
    }

    .sub-menu ul {
      flex-direction: column;
    }

    .sub-menu ul li {
      width: 100%;
    }

    .sub-menu ul li a {
      color: #fff;
      padding: 10px;
    }

    .sub-menu ul li a:hover {
      background-color: #555;
    }

    .mobile-logo img {
      max-width: 80px;
    }

    .as-menu-toggle {
      background: none;
      border: none;
      color: #fff;
      font-size: 24px;
      cursor: pointer;
    }

    .sticky-wrapper {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
  </style>
</head>
<body>
  <header class="header-top">
    <div class="container">
      <div class="header-links">
        <ul>
        <li><i class="fal fa-phone"></i><a href="tel:+256214203215">+63 83 5523348</a></li>
        <li><i class="fal fa-location-dot" target = "_block" ><a href="https://www.google.com/maps/@6.1117421,125.1725222,3a,75y,198.74h,85.78t/data=!3m6!1e1!3m4!1stmVcsnfjnT2cl5WyuCHmwQ!2e0!7i16384!8i8192?coh=205409&entry=ttu" target = "_block" ></i>Pioneer Ave.,GSC, South Cotabato, Philippines</li></a>
        <li><i class="fal fa-clock"></i>contactus@rmmc.edu.ph</li>
        </ul>
      </div>
      <div class="header-social">
        <span class="social-title">Follow Us:</span>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </header>
  <div class="sticky-wrapper">
    <div class="menu-area">
      <div class="container">
        <div class="logo-area">
          <a href="#"><img src="assets/img/logo.png" alt="Logo"></a>
        </div>
        <nav class="main-menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Admissions</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  
</body>
</html>
