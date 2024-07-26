<?php
$page = 'library';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library.css">

<body>

    <div class="library">
        <div class="library__home__page">
            <!-- <img class="bgImage" src="assets/img/library_place.png" alt=""> -->

            <ul class="library__home__page__links">
                <a href="" class="library__home__page__links__list">HOME</a>
                <a href="" class="library__home__page__links__list">FACULTY AND STAFF</a>
                <a href="" class="library__home__page__links__list">SITE LOCATION</a>
                <a href="" class="library__home__page__links__list">ORGANIZATIONAL CHART</a>
            </ul>

            <p id="library__home__page__title">Library</p>
            <div id="library__home__page__subtitles">
                <p class="library__home__page__subtitles__list ">Read and learn inside the fresh new library</p>
                <p class="library__home__page__subtitles__list text--mini">LIBRARY HOURS</p>
            </div>

            <div class="library__home__page__library-hours">
                <div class="library__home__page__library-hours__menus">
                    <div class="search-item" onclick="toggleDropdown('regular-semesters')">
                        <span>REGULAR SEMESTERS</span>
                        <span class="dropdown-arrow">&#9662;</span>
                    </div>
                    <div class="search-item" onclick="toggleDropdown('summer')">
                        <span>SUMMER</span>
                        <span class="dropdown-arrow">&#9662;</span>
                    </div>
                    <!-- <button class="search-button">Search Now</button> -->
                </div>

                <!-- Dropdown Content -->
                <div class="library__home__page__library-hours__content" id="regular-semesters">
                    <h3>Library Hours - Regular Semesters</h3>
                    <p>Mondays - Thursday: 8:00 AM - 7:00 PM (No noon break)</p>
                    <p>Friday: 8:00 AM - 5:00 PM (No noon break)</p>
                    <p>Saturdays: 8:00 AM - 4:00 PM (No noon break)</p>
                </div>
                <div class="library__home__page__library-hours__content" id="summer">
                    <h3>Library Hours - Summer</h3>
                    <p>Monday - Fridays: 8:00 AM - 5:00 PM (No noon break)</p>
                    <p>Saturdays: 8:00 AM - 12:00 Noon (No noon break)</p>
                </div>
            </div>


        </div>



        <div class="library__vmg__page">


            <div class="library__vmg__page__content">

                <div class="library__vmg__page__content__item">
                    <h3 class="library__vmg__page__content__item__title">VISION</h3>
                    <p class="library__vmg__page__content__item__description">The RMMC College Library envisions to be recognized
                        as a leading
                        knowledge resource center dedicated to support the learning, teaching, and research needs of the
                        patrons and its immediate communities.</p>
                </div>
                <div class="library__vmg__page__content__item">
                    <h3 class="library__vmg__page__content__item__title">MISSION</h3>
                    <p class="library__vmg__page__content__item__description">To attain its vision, the RMMC College Library will
                        acquire various
                        information sources in different forms, provide facilities and services, and preserve cultural
                        heritage by developing, enriching, and preserving its Filipiniana collections.</p>
                </div>
                <div class="library__vmg__page__content__item">
                    <h3 class="library__vmg__page__content__item__title">GOALS</h3>
                    <p class="library__vmg__page__content__item__description">Offer the clients with the best and relevant
                        information within a
                        suitable environment.
                        To achieve this goal, two major thrusts must be developed:
                        Development of library collection that will focus on subject areas which support the school’s
                        academic programs and areas of research, and
                        2.Providing online resources and services.</p>
                </div>

            </div>

        </div>


        <div class="library__floors__page">


            <div class="library__page__title">
                <h2>The College Library</h2>
            </div>

            <div class="library__page__list">

                <div class="library__page__list__item">
                    <img src="assets/img/library_building1.png" alt="Library 1" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
                <div class="library__page__list__item">
                    <img src="assets/img/library_building2.png" alt="Library 2" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
                <div class="library__page__list__item">
                    <img src="assets/img/library_building3.png" alt="Library 3" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
            </div>

            <div class="content__image__description">
                <p>The Library is located at the ERM building. It is a four-storey building where the ground floor
                    houses the Graduate School Library. The second floor houses the General Circulating books,
                    Periodical Section, and Office of the Library Director. The third floor houses the Filipiniana
                    collections, Technical Section, and the Internet Section. The fourth floor houses the Audio Visual
                    Room, Discussion/Work area space, Theatre, and Office of the Multimedia Specialist.</p>
            </div>


            <div class="library__page__title">
                <h2>The 2nd Floor Circulation Section</h2>
            </div>

            <div class="library__page__list">

                <div class="library__page__list__item">
                    <img src="assets/img/lib1.png" alt="Library 1" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
                <div class="library__page__list__item">
                    <img src="assets/img/lib2.png" alt="Library 2" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
            </div>

            <div class="content__image__description">
                <p>TThe 2nd floor of the library houses the circulation collections, periodicals, general references and
                    fiction books. It is where the office of the library director is located. It is newly renovated with
                    a state of the art design to capture the attention of the users, provide comfortable area to make
                    their learning fun and memorable. It has security gate and 4 CCTV cameras for the safety of the
                    collections. Circulation counter is being provided where students can check- out and check-in their
                    books with the help of a librarian and a support staff. There are 4 computer units which served as
                    an Online Public Access Catalog (OPAC) station where users check titles of books/articles and other
                    library resources in the fastest way. It has also individual carrels for students who want to
                    concentrate and not to be disturbed.</p>
            </div>

            <div class="library__page__title">
                <h2>3rd Floor</h2>
            </div>

            <div class="library__page__list">

                <div class="library__page__list__item">
                    <img src="assets/img/library_place.png" alt="Library 1" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
                <div class="library__page__list__item">
                    <img src="assets/img/lib5.png" alt="Library 2" class="content-image">
                    <h3 class="content-title"></h3>
                    <p class="content-location"></p>
                </div>
            </div>

            <div class="content__image__description">
                <p>The 3rd floor is where the Filipiniana collections are located, the internet section and the
                    Technical room. It has 12 reading tables and 7 individual carrels that can accommodate 103 users at
                    a time. </p>
            </div>

            <div class="library__page__title">
                <h2>4th Floor</h2>
            </div>

            <div class="library__page__list">

                <div class="library__page__list__item">
                    <img src="assets/img/lib3.png" alt="Library 1" class="content-image">
                    <h3 class="content-title">Theatre</h3>
                    <p class="content-location">Seating capacity of 145</p>
                </div>
                <div class="library__page__list__item">
                    <img src="assets/img/lib4.png" alt="Library 2" class="content-image">
                    <h3 class="content-title">The AVR</h3>
                    <p class="content-location">Can accommodate 50 students at a time</p>
                </div>
            </div>

            <div class="content__image__description">
                <p>This is where the discussion/work area room, AVR, theatre and office of the multimedia specialist is
                    located.
                    <br>
                    Discussion and Work Area Room
                    This area is intended for students who have group discussion and making their projects such as the
                    Engineering, Accountancy and Education students.
                </p>
            </div>

        </div>

        <div class="logo__page">

            <div class="logo__page__content">

                <div class="logo__page__content__item">
                    <h3 class="logo__page__content__item__title">Ramon Magsaysay Memorial College Library </h3>
                    <p class="logo__page__content__item__description">The Ramon Magsaysay Memorial Colleges (RMMC)
                        maintains a library with
                        resources and services to satisfy the needs of the many college constituents in terms of
                        instruction, research, and extension. The library supports the reading and research needs of the
                        students, instructors, researchers, administrators, and staff.
                    </p>
                </div>
                <div class="logo__page__content__item">
                    <img src="assets/img/rmmc-library-logo.png" alt="Library 3" class="content-image">
                </div>
            </div>


        </div>

        <script src="scripts/library.js"></script>

    </div>
</body>
<?php include 'footer.php' ?>