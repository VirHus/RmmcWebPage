<?php
$page = 'library_baggage';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library_baggage.css">

<body>


    <div class="library__baggage">
        <div class="library__baggage__top">
            <!-- <img class="bgImage" src="assets/images/library_place.png" alt=""> -->

            <ul class="library__baggage__top__links">
                <a href="library.php" class="library__baggage__top__links__list">HOME</a>
                <a href="" class="library__baggage__top__links__list">LIBRARIAN AND STAFF</a>
                <a href="" class="library__baggage__top__links__list">ONLINE RESOURCES</a>
                <a href="" class="library__baggage__top__links__list">SERVICES</a>
                <a href="" class="library__baggage__top__links__list">ORGANIZATIONAL CHART</a>
            </ul>

            <p id="library__baggage__top__title">Library Baggage Area</p>

        </div>

        <div class="library__baggage__page">

            <!-- <h2 class="library_services__page__title">Readers/Circulation Services</h2> -->
            <div class="library__baggage__page__nav">

                <div class="library__baggage__page__nav__left">
                    <h2 class="library__baggage__page__nav__left__title">LIBRARY BAGGAGE AREA</h2>
                    <div class="tabcontent">
                        <h3 class="tabcontent__title">Guidelines on the use of the baggage counter</h3>
                        <li>Library users are required to deposit their bags and other bulky things before entering the
                            library. However, they must carry with them their valuable things such as money, jewelry,
                            cellular phones, calculator, etc.</li>
                        <li>The library is not responsible for any loss of unattended/ un-surrendered personal
                            belongings.
                        </li>
                        <li>Only students who will use the library will be allowed to deposit their things in the
                            baggage
                            counter. </li>
                        <li>The owner of the unclaimed baggage will be charged of 200 pesos per day. </li>
                    </div>





                </div>

                <div class="library__baggage__page__nav__right">
                    <h3 class="library__baggage__page__nav__right__title">About Us</h3>
                    <ul class="library__baggage__page__nav__right__links">
                        <a href="library.php">Home</a>
                        <a href="library_hours.php">Library Hours</a>
                        <a href="library_membership">Library Membership</a>
                        <a href="library_fees.php">Library Fees</a>
                        <a href="library_baggage.php" class="active">Baggage Area</a>
                        <a href="library_contact.php">Contact Us</a>

                    </ul>
                </div>

            </div>

        </div>


    </div>
</body>

<?php include 'footer.php' ?>