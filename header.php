<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Rmmc">
    <meta name="description" content="Rmmc - Events and News">
    <meta name="keywords" content="Rmmc - Events and News">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">

    <link rel="manifest" href="assets/images/favicons/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">
    <script src="scripts/header.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="styles/floating_footer.css">
    <link rel="stylesheet" href="styles/footer.css">

    <link rel="stylesheet" href="styles/nav-bar.css">
    <link rel="stylesheet" href="styles/root.css">

    <?php if ($page == 'index'): ?>
        <link rel="stylesheet" href="styles/index.css">
        <script src="scripts/index.js" defer></script>
        <title>RMMC - OFFICIAL WEBSITE</title>

    <?php elseif ($page == 'enrollment'): ?>
        <link rel="stylesheet" href="styles/enrollment.css">
        <title>RMMC - Enrollment</title>

    <?php elseif ($page == 'requirements'): ?>
        <link rel="stylesheet" href="styles/requirements-page.css">
        <title>RMMC - Requirements</title>

    <?php elseif ($page == 'academic-division'): ?>
        <link rel="stylesheet" href="styles/academic-division.css">
        <link rel="stylesheet" href="styles/academic-division-navigation.css">
        <title>RMMC - College Of Engineering</title>

    <?php elseif ($page == 'academic-division-academic-programs'): ?>
        <link rel="stylesheet" href="styles/academic-division-navigation.css">
        <link rel="stylesheet" href="styles/academic-division-academic-programs.css">
        <title>RMMC - College Of Engineering</title>

    <?php elseif ($page == 'academic-division-faculty-and-staff'): ?>
        <link rel="stylesheet" href="styles/academic-division-navigation.css">
        <link rel="stylesheet" href="styles/academic-division-faculty-and-staff.css">
        <script src="scripts/academic-division-faculty-and-staff.js" defer></script>
        <title>RMMC - College Of Engineering</title>

    <?php elseif ($page == 'academic-division-organizational-chart'): ?>
        <link rel="stylesheet" href="styles/academic-division-navigation.css">
        <link rel="stylesheet" href="styles/academic-division-organizational-chart.css">
        <title>RMMC - College Of Engineering</title>

    <?php elseif ($page == 'news'): ?>
        <link rel="stylesheet" href="styles/news.css">
        <script src="scripts/news.js" defer></script>
        <title>RMMC - News</title>

    <?php elseif ($page == 'library-services'): ?>
        <link rel="stylesheet" href="styles/library_services.css">
        <script src="scripts/library-services.js" defer></script>

    <?php elseif ($page == 'library'): ?>
        <link rel="stylesheet" href="styles/library.css">
        <script src="scripts/library.js" defer></script>
        <title>RMMC - Library</title>

    <?php elseif ($page == 'library-about'): ?>
        <link rel="stylesheet" href="styles/library_about.css">
        <script src="scripts/library_about.js" defer></script>
        <title>RMMC - Library</title>

    <?php elseif ($page == 'contact'): ?>
        <link rel="stylesheet" href="styles/contact.css">
        <title>RMMC - Contact Us</title>

    <?php elseif ($page == 'course'): ?>
        <link rel="stylesheet" href="/RmmcWebPage/styles/course.css">
        <title>RMMC - Courses</title>

    <?php elseif ($page == 'course_details'): ?>
        <link rel="stylesheet" href="styles/course_details.css">
        <script src="scripts/course_details.js"></script>
        <title>RMMC - Courses Details</title>

    <?php elseif ($page == 'academic_division_academic_programs' || $page == 'academic_division_faculty_and_staff'): ?>
        <link rel="stylesheet" href="styles/college.css">
        <title>RMMC - Course</title>

    <?php endif; ?>
</head>