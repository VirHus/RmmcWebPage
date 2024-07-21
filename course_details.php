<?php
$page = 'course_details';
require 'header.php';
?>
<?php include 'nav-bar.php' ?>
<link rel="stylesheet" href="styles/course_details.css">
<div class="breadcrumb-card">
    <div class="breadcrumb-card__box">
        <h1 class="breadcrumb-card__box__title">COURSE DETAILS</h1>
        <ul class="breadcrumb-card__box__menu">
            <a class="breadcrumb-card__box__menu__item__link" href="index.php">Home</a>
            <a class="breadcrumb-card__box__menu__item__link" href="index.php"><i class="fa-solid fa-angle-right"></i> Course Details</a>
        </ul>
    </div>
</div>

<section class="course">
    <div class="course__content">
        <div class="course__content__left">
            <div class="course__content__left__top">
                <div class="course__content__left__top__header">
                    <img src="assets/img/course/teacher.jpg" alt="Course Image" class="course__content__left__top__header__image">
                    <h2 class="course__content__left__top__header__title">Bachelor of Elementary Education</h2>
                </div>

            </div>
        </div>
        <aside class="course__content__right">
            <div class="course__content__right__info">
                <h2 class="course__content__right__info__title">Course Information</h2>
                <ul class="course__content__right__info__list">
                    <li><i class="fa-regular fa-user"></i><strong>Instructor: </strong><span>Kevin Perry</span></li>
                    <li><i class="fa-regular fa-file"></i><strong>Lessons: </strong><span>8</span></li>
                    <li><i class="fa-regular fa-clock"></i><strong>Duration: </strong><span>15h 30m 36s</span></li>
                    <li><i class="fa-regular fa-tag"></i><strong>Course level: </strong><span>Beginners</span></li>
                    <li><i class="fa-light fa-globe"></i><strong>Language: </strong><span>English</span></li>
                    <li><i class="fa-light fa-puzzle-piece"></i><strong>Quizzes: </strong><span>04</span></li>
                </ul>
                <a href="https://www.linkedin.com/" class=" btn course__content__right__info__button"><i class="far fa-share-nodes"></i>Share This
                    Course</a>
            </div>
        </aside>
    </div>
</section>