<?php
$page = 'contact';
require 'header.php';
?>



<?php include "nav_bar.php" ?>

<div class="breadcrumb-card">
    <div class="breadcrumb-card__box">
        <h1 class="breadcrumb-card__box__title">CONTACT US</h1>
        <ul class="breadcrumb-card__box__menu">
            <a class="breadcrumb-card__box__menu__item__link" href="index.php">Home</a></li>
        </ul>
    </div>
</div>


<div class="map_container">


    <div class="map_container__contact">
        <h2 class="map_container__contact__border__title">Get in Touch</h2>
        <p class="textP">Have an inquiry or some feedback for us? Send your inquiries to info@rmmc.edu.ph</p>
        <div class="map_container__contact__info">
            <div class="map_container__contact__info__icon"></div>
            <div class="map_container__contact__info__body">
                <h4 class="map_container__contact__info__body__title">Our Address</h4>
                <span class="map_container__contact__info__body__text">Pioneer Ave., GSC, South Cotabato,
                    Philippines</span>
            </div>
        </div>

        <div class="map_container__contact__info">
            <div class="map_container__contact__info__icon"></div>
            <div class="map_container__contact__info__body">
                <h4 class="map_container__contact__info__body__title">Phone Number</h4>
                <span class="map_container__contact__info__body__text">
                    <span>
                        Mobile:
                        <a href="tel:+65485965789">+63 83 5523348</a>
                    </span>
                </span>
            </div>
        </div>

        <div class="map_container__contact__info">
            <div class="map_container__contact__info__icon"></div>
            <div class="map_container__contact__info__body">
                <h4 class="map_container__contact__info__body__title">Hours of Operation</h4>
                <p>
                    <span class="map_container__contact__info__body__text">
                        <span>Monday - Friday: 07:00 - 17:00</span>

                    </span>
                </p>
                <p>
                    <span class="map_container__contact__info__body__text">
                        <span>Saturday: 07:00 - 12:00</span>

                    </span>
                    <br>
                    <a class="btn btn-danger" href="google.html">NAVIGATE LOCATION</a>
                </p>
            </div>
        </div>

    </div>
    <div class="map-sec space">
        <div class="map">
            <iframe  height="600" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.141853459415!2d125.17029831405843!3d6.111596529511836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79fa0f6042059%3A0x73a6153fd174fd6!2sRamon%20Magsaysay%20Memorial%20Colleges!5e0!3m2!1sen!2sbd!4v1675389517117!5m2!1sen!2sbd"
                style="border:0;" width="1100">
            </iframe>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>



</html>