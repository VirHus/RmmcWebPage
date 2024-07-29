<?php
$page = 'library_membership';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library_membership.css">

<body>


    <div class="library__membership">
        <div class="library__membership__top">
            <!-- <img class="bgImage" src="assets/images/library_place.png" alt=""> -->

            <ul class="library__membership__top__links">
                <a href="library.php" class="library__membership__top__links__list">HOME</a>
                <a href="" class="library__membership__top__links__list">LIBRARIAN AND STAFF</a>
                <a href="" class="library__membership__top__links__list">ONLINE RESOURCES</a>
                <a href="" class="library__membership__top__links__list">SERVICES</a>
                <a href="" class="library__membership__top__links__list">ORGANIZATIONAL CHART</a>
            </ul>

            <p id="library__membership__top__title">Library Membership</p>

        </div>

        <div class="library__membership__page">

            <!-- <h2 class="library_services__page__title">Readers/Circulation Services</h2> -->
            <div class="library__membership__page__nav">

                <div class="library__membership__page__nav__left">
                    <h3>LIBRARY MEMBERSHIP</h3>
                    <div class="tabcontent">
                        <p>Library membership is granted automatically, to all bonafide students,
                            office staffs and faculty members of the college. Membership lasts for the duration of their
                            stay in the college. They will enjoy the full use of all library resources and its services.
                            Students (both Undergraduate and Graduate school) have to present their school ID in order
                            to
                            enter the library and borrow books. New full time and part time faculty members are
                            requested to
                            show their subject load from their college before they are allowed to make use of the
                            library’s
                            resources. Researchers from other institutions may also avail of library services but are
                            subject to library’s rules and regulations and upon presentation of a referral letter from
                            their
                            respective librarians or office heads. However, outside users will be catered only upon
                            availability of some space or resources.</p>

                    </div>

                </div>

                <div class="library__hours__page__nav__right">
                    <h3 class="library__hours__page__nav__right__title">About Us</h3>
                    <ul class="library__hours__page__nav__right__links">
                        <a href="library.php">Home</a>
                        <a href="library_hours.php">Library Hours</a>
                        <a href="library_membership.php" class="active">Library Membership</a>
                        <a href="library_fees.php">Library Fees</a>
                        <a href="library_baggage.php">Baggage Area</a>
                        <a href="">Contact Us</a>

                    </ul>
                </div>

            </div>

        </div>


    </div>
</body>

<?php include 'footer.php' ?>