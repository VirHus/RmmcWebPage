<?php
$page = 'library_contact';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library_contact.css">

<body>


    <div class="library__membership">
        <div class="library__membership__top">
            <!-- <img class="bgImage" src="assets/img/library_place.png" alt=""> -->

            <ul class="library__membership__top__links">
                <a href="library.php" class="library__membership__top__links__list">HOME</a>
                <a href="" class="library__membership__top__links__list">LIBRARIAN AND STAFF</a>
                <a href="" class="library__membership__top__links__list">ONLINE RESOURCES</a>
                <a href="" class="library__membership__top__links__list">SERVICES</a>
                <a href="" class="library__membership__top__links__list">ORGANIZATIONAL CHART</a>
            </ul>

            <p id="library__membership__top__title">Library Contact</p>

        </div>

        <div class="library__membership__page">

            <!-- <h2 class="library_services__page__title">Readers/Circulation Services</h2> -->
            <div class="library__membership__page__nav">

                <div class="library__membership__page__nav__left">
                    <h3 class="library__membership__page__nav__left__title">LIBRARY CONTACT</h3>
                    <div class="tabcontent">
                        <h3 class="tabcontent__title">Ramon Magsaysay Memorial Colleges Library</h3>
                        <a href="tel:305-8492">
                            <i class="fa-solid fa-phone"></i>
                             : 305-8492
                        </a>
                        <a href="mailto:rmmcinc.collegelibrary@gmail.com">
                            <i class="fa-solid fa-envelope"></i>
                            : rmmcinc.collegelibrary@gmail.com
                        </a>
                        <a href="https://www.facebook.com/rmmccollegelibrary">
                            <i class="fab fa-facebook-f"></i>
                            : https://www.facebook.com/rmmccollegelibrary
                        </a>

                    </div>

                </div>

                <div class="library__hours__page__nav__right">
                    <h3 class="library__hours__page__nav__right__title">About Us</h3>
                    <ul class="library__hours__page__nav__right__links">
                        <a href="library.php">Home</a>
                        <a href="library_hours.php">Library Hours</a>
                        <a href="library_membership.php">Library Membership</a>
                        <a href="library_fees.php">Library Fees</a>
                        <a href="library_baggage.php">Baggage Area</a>
                        <a href="library_contact.php"  class="active">Contact Us</a>

                    </ul>
                </div>

            </div>

        </div>


    </div>
</body>

<?php include 'footer.php' ?>