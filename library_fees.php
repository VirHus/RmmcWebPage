<?php
$page = 'library_fees';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library_fees.css">

<body>


    <div class="library__fees">
        <div class="library__fees__top">
            <!-- <img class="bgImage" src="assets/img/library_place.png" alt=""> -->

            <ul class="library__fees__top__links">
                <a href="library.php" class="library__fees__top__links__list">HOME</a>
                <a href="" class="library__fees__top__links__list">LIBRARIAN AND STAFF</a>
                <a href="" class="library__fees__top__links__list">ONLINE RESOURCES</a>
                <a href="" class="library__fees__top__links__list">SERVICES</a>
                <a href="" class="library__fees__top__links__list">ORGANIZATIONAL CHART</a>
            </ul>

            <p id="library__fees__top__title">Library Fees</p>

        </div>

        <div class="library__fees__page">

            <!-- <h2 class="library_services__page__title">Readers/Circulation Services</h2> -->
            <div class="library__fees__page__nav">

                <div class="library__fees__page__nav__left">
                    <h3>LIBRARY FEES</h3>

                    <p>Library fees are automatically charged to students accounts every semester. <br>Outside users are
                        charged of 50.00 per day and they cannot borrow nor photocopy the materials. <br>They are to be read
                        inside the library only. </p>



                </div>

                <div class="library__fees__page__nav__right">
                    <h3 class="library__fees__page__nav__right__title">About Us</h3>
                    <ul class="library__fees__page__nav__right__links">
                        <a href="library.php">Home</a>
                        <a href="">Library Hours</a>
                        <a href="">Library Membership</a>
                        <a href="" class="active">Library Fees</a>
                        <a href="">Baggage Area</a>
                        <a href="">Internet Service</a>
                        <a href="">Contact Us</a>

                    </ul>
                </div>

            </div>

        </div>


    </div>
</body>

<?php include 'footer.php' ?>