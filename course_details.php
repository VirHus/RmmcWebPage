<?php
$page = 'course_details';
require 'header.php';
?>
<?php include 'nav-bar.php' ?>

<div class="breadcrumb-card">
    <div class="breadcrumb-card__box">
        <h1 class="breadcrumb-card__box__title">COURSE DETAILS</h1>
        <ul class="breadcrumb-card__box__menu">
            <a class="breadcrumb-card__box__menu__item__link" href="index.php">Home</a>
            <a class="breadcrumb-card__box__menu__item__link" href="index.php"><i class="fa-solid fa-angle-right"></i>
                Course Details</a>
        </ul>
    </div>
</div>

<section class="course">
    <div class="course__content">
        <div class="course__content__left">
            <div class="course__content__left__top">
                <div class="course__content__left__top__header">
                    <img src="assets/img/course/teacher.jpg" alt="Course Image"
                        class="course__content__left__top__header__image">
                    <h2 class="course__content__left__top__header__title">Bachelor of Elementary Education</h2>
                </div>

            </div>

            <div class="course__content__left__bottom">
                <div class="course__content__left__bottom__tabs">
                    <div class="course__content__left__bottom__tabs__tab active" onclick="showContent('overview')"><i
                            class="fa-light fa-bookmark"></i>OVERVIEW</div>
                    <div class="course__content__left__bottom__tabs__tab" onclick="showContent('curriculum')"><i
                            class="fa-light fa-book"></i>CURRICULUM</div>
                    <div class="course__content__left__bottom__tabs__tab" onclick="showContent('instructor')"><i
                            class="fa-light fa-user"></i>INSTRUCTOR</div>
                    <div class="course__content__left__bottom__tabs__tab" onclick="showContent('reviews')"><i
                            class="fa-light fa-star"></i>REVIEWS</div>
                </div>

                <div id="overview" class="course__content__left__bottom__content">
                    <h2>Description</h2>
                    <p>Conveniently build adaptive users with front-end human capital. Appropriately unleash team
                        building
                        technology for goal-oriented paradigms. Dynamically generate interoperable e-business vis-a-vis
                        goal-oriented value. Completely pursue fully tested content whereas multifunctional core
                        competencies. Progressively scale team driven process improvements before premier
                        functionalities.
                        Holistically cultivate intermandated methodologies rather than virtual technology.
                        Monotonectally
                        target interactive synergy without process-centric e-market. Holistically pursue enterprise-wide
                        leadership skills for enterprise leadership. Collaboratively underwhelm standardized expertise
                        after
                        effective bandwidth.</p>
                    <p>Enthusiastically aggregate ethical systems for standardized mindshare. Energistically target
                        resource
                        maximizing leadership skills without backward-compatible action items. Credibly impact
                        alternative
                        expertise vis-a-vis economically sound results. Dynamically synergize empowered benefits through
                        functional partnerships. Authoritatively empower prospective infomediaries for interactive
                        content.
                        Synergistically embrace 2.0 paradigms through professional intellectual capital. Interactively
                        strategize parallel growth strategies without out-of-the-box web services.</p>

                    <h2>What Will You Learn?</h2>
                    <p>Enthusiastically aggregate ethical systems for standardized mindshare. Energistically target
                        resource
                        maximizing leadership skills without backward-compatible action items. Credibly impact
                        alternative
                        expertise vis-a-vis economically sound results. Dynamically synergize empowered benefits through
                        functional partnerships. Authoritatively empower prospective infomediaries for interactive
                        content.
                        Synergistically embrace 2.0 paradigms through professional intellectual capital.</p>
                </div>

                <div id="curriculum" class="course__content__left__bottom__content" style="display:none;">
                    <h2>The Course Curriculum</h2>
                    <p>If there’s one thing that’s certain in life is that everything is constantly changing. You may
                        suffer losses when it comes to loved ones, finances, belongings, and the like. But, the thing
                        that you can never lose is your education.</p>
                </div>

                
                <div id="instructor" class="course__content__left__bottom__content" style="display:none;">

                    <div class="course__content__left__bottom__content__instructor__card">
                        <img src="assets\img\836.jpg" alt="Instructor">
                        <div class="course__content__left__bottom__content__instructor__card__details">
                            <h3>Kevin Nunez</h3>
                            <p>Optimize resource leveling innovation whereas visionary value. Compellingly engage
                                extensible process with business process improvements.</p>
                            <div class="course__content__left__bottom__content__instructor__card__stats">
                                <div><i class="fas fa-book"></i> 4 Courses</div>
                                <div><i class="fas fa-user"></i> 2500 Students</div>
                            </div>
                            <div class="course__content__left__bottom__content__instructor__card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="course__content__left__bottom__content__instructor__card">
                        <img src="assets\img\836.jpg" alt="Instructor">
                        <div class="course__content__left__bottom__content__instructor__card__details">
                            <h3>Kevin Nunez</h3>
                            <p>Optimize resource leveling innovation whereas visionary value. Compellingly engage
                                extensible process with business process improvements.</p>
                            <div class="course__content__left__bottom__content__instructor__card__stats">
                                <div><i class="fas fa-book"></i> 4 Courses</div>
                                <div><i class="fas fa-user"></i> 2500 Students</div>
                            </div>
                            <div class="course__content__left__bottom__content__instructor__card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="course__content__left__bottom__content__instructor__card">
                        <img src="assets\img\836.jpg" alt="Instructor">
                        <div class="course__content__left__bottom__content__instructor__card__details">
                            <h3>Kevin Nunez</h3>
                            <p>Optimize resource leveling innovation whereas visionary value. Compellingly engage
                                extensible process with business process improvements.</p>
                            <div class="course__content__left__bottom__content__instructor__card__stats">
                                <div><i class="fas fa-book"></i> 4 Courses</div>
                                <div><i class="fas fa-user"></i> 2500 Students</div>
                            </div>
                            <div class="course__content__left__bottom__content__instructor__card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="course__content__left__bottom__content__instructor__card">
                        <img src="assets\img\836.jpg" alt="Instructor">
                        <div class="course__content__left__bottom__content__instructor__card__details">
                            <h3>Kevin Nunez</h3>
                            <p>Optimize resource leveling innovation whereas visionary value. Compellingly engage
                                extensible process with business process improvements.</p>
                            <div class="course__content__left__bottom__content__instructor__card__stats">
                                <div><i class="fas fa-book"></i> 4 Courses</div>
                                <div><i class="fas fa-user"></i> 2500 Students</div>
                            </div>
                            <div class="course__content__left__bottom__content__instructor__card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="course__content__left__bottom__content__instructor__card">
                        <img src="assets\img\836.jpg" alt="Instructor">
                        <div class="course__content__left__bottom__content__instructor__card__details">
                            <h3>Kevin Nunez</h3>
                            <p>Optimize resource leveling innovation whereas visionary value. Compellingly engage
                                extensible process with business process improvements.</p>
                            <div class="course__content__left__bottom__content__instructor__card__stats">
                                <div><i class="fas fa-book"></i> 4 Courses</div>
                                <div><i class="fas fa-user"></i> 2500 Students</div>
                            </div>
                            <div class="course__content__left__bottom__content__instructor__card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="reviews" class="course__content__left__bottom__content" style="display:none;">
                    <h2>Reviews</h2>
                    <p>Reviews content goes here...</p>
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
                <a href="https://www.linkedin.com/" class="course__content__right__info__button"><i
                        class="far fa-share-nodes"></i>Share This
                    Course</a>
            </div>
        </aside>
    </div>

</section>

<?php include 'footer.php' ?>