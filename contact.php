<?php
$page = 'contact';
require 'header.php';

include "nav-bar.php";
include 'breadcrumb.php';

renderBreadcrumb('CONTACT US', [
  ['url' => 'index.php', 'text' => 'Home'],
  ['url' => 'index.php', 'text' => 'Contact Us', 'svg' => true]
]);
?>

<div id="map-container">
  <div id="map-container-contact">
    <h1>Get in Touch</h1>
    <p>Have an inquiry or some feedback for us? Send your inquiries to info@rmmc.edu.ph</p>
    <div id="map-container-contact-infos">
    <div class="map-container-contact-infos__item">
      <div class="map-container-contact__infos__item__icon"><i class="fa-solid fa-location-dot"></i></div>
      <div class="map-container-contact__infos__item__body">
        <h4>Our Address</h4>
        <p>Pioneer Ave., GSC, South Cotabato, Philippines</p>
      </div>
    </div>

    <div class="map-container-contact-infos__item">
      <div class="map-container-contact__infos__item__icon"><i class="fa-solid fa-phone"></i></div>
      <div class="map-container-contact__infos__item__body">
        <h4>Phone Number</h4>
        <p>
          Mobile:
          <span>
            <a href="tel:+65485965789">+63 83 5523348</a>
          </span>
        </p>
      </div>
    </div>

    <div class="map-container-contact-infos__item">
      <div class="map-container-contact__infos__item__icon"><i class="fa-regular fa-clock"></i></div>
      <div class="map-container-contact__infos__item__body">
        <h4>Hours of Operation</h4>
        <p>
          <span>Monday - Friday: 07:00 - 17:00</span>
        </p>
        <p>
          <span>Saturday: 07:00 - 12:00</span>
        </p>
      </div>
    </div>

    <a class="button button--danger" href="https://www.google.com/maps/@6.1117421,125.1725222,3a,75y,198.74h,85.78t/data=!3m6!1e1!3m4!1stmVcsnfjnT2cl5WyuCHmwQ!2e0!7i16384!8i8192?coh=205409&entry=ttu">NAVIGATE LOCATION</a>

    </div>
  </div>

  <div id="map-section-space">
    <div id="map">
      <iframe height="800" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.141853459415!2d125.17029831405843!3d6.111596529511836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79fa0f6042059%3A0x73a6153fd174fd6!2sRamon%20Magsaysay%20Memorial%20Colleges!5e0!3m2!1sen!2sbd!4v1675389517117!5m2!1sen!2sbd">
      </iframe>
    </div>
  </div>
</div>

<div id="contact-section" class="background_img" style="background-image: url('assets/img/bg/contact_bg_1.png');">
  <p>Talk with Us!</p>
  <h2>Have any Questions?</h2>
  <div id="contact-section-form">
    <div id="contact-section-form-column">
      <div class="contact-section-form-column__row">
        <button class="button button--primary">Inquiry</button>
        <button class="button button--primary">Concerns</button>
      </div>
      <div class="contact-section-form-column__row">
        <button class="button button--primary">Suggestions</button>
        <button class="button button--primary">Complaints</button>
      </div>
      <div class="contact-section-form-column__row">
        <button class="button button--primary">Appreciation</button>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php' ?>