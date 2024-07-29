<?php
$page = 'library_hours';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library_hours.css">

<body>


    <div class="library__hours">
            <div class="library__hours__top">
                <!-- <img class="bgImage" src="assets/img/library_place.png" alt=""> -->

                <ul class="library__hours__top__links">
                    <a href="library.php" class="library__hours__top__links__list">HOME</a>
                    <a href="" class="library__hours__top__links__list">LIBRARIAN AND STAFF</a>
                    <a href="" class="library__hours__top__links__list">ONLINE RESOURCES</a>
                    <a href="" class="library__hours__top__links__list">SERVICES</a>
                    <a href="" class="library__hours__top__links__list">ORGANIZATIONAL CHART</a>
                </ul>

                <p id="library__hours__top__title">Library Hours</p>

            </div>

            <div class="library__hours__page">

                <!-- <h2 class="library_services__page__title">Readers/Circulation Services</h2> -->
                <div class="library__hours__page__nav">

                    <div class="library__hours__page__nav__left">
                        <h3>LIBRARY HOURS</h3>
                        <table>
                            <tr>
                                <th></th>
                                <th>Regular Semester</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>8:00 AM - 7:00 PM</td>
                                <td>8:00 AM - 4:00 PM</td>
                            </tr>
                            <tr>
                                <td>Days</td>
                                <td>Monday to Friday</td>
                                <td>Saturday</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th></th>
                                <th>Summer</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>8:00 AM - 5:00 PM</td>
                                <td>8:00 - 12:00 Noon</td>
                            </tr>
                            <tr>
                                <td>Days</td>
                                <td>Monday to Friday</td>
                                <td>Saturday</td>
                            </tr>
                        </table>

                    </div>

                    <div class="library__hours__page__nav__right">
                        <h3 class="library__hours__page__nav__right__title">About Us</h3>
                        <ul class="library__hours__page__nav__right__links">
                            <a href="library.php">Home</a>
                            <a href="" class="active">Library Hours</a>
                            <a href="">Library Membership</a>
                            <a href="">Library Fees</a>
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