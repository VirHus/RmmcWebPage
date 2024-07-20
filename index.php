<?php
  $page = 'index';
  require 'header.php';
  include "nav_bar.php"
?>
<section class="welcome-section index--section">
  <div class="welcome-section__background"></div>
  <div class="welcome-section__blob"></div>
  <div class="welcome-section__content">
    <div class="welcome-section__content__left">
      <div class="welcome-section__content__left__logos">
        <img alt="Pacucoa" src="assets/img/pacu.png">
        <img alt="Socotec" src="assets/img/soco.png">
      </div>

      <div class="welcome-section__content__left__texts">
        <p class="welcome-section__content__left__texts__item">PACUCOA ACCREDITED SCHOOL &amp;</p>
        <p class="welcome-section__content__left__texts__item">ISO 9001:2015 CERTIFIED</p>
      </div>

      <a class="button--primary" href="course.php">Enroll Now</a>
    </div>

    <img src="assets/img/hero/hero_img_1_1_newnew.png" alt="RMMC Students">
  </div>
</section>

<section class="school-description index--section">
  <div class="school-description__main">

    <img class="school-description__main__photo" src="assets/img/normal/about_1_1.png">

    <div class="school-description__main__content">
      <p>Welcome to</p>
      <h3>Ramon Magsaysay Memorial Colleges</h3>
      <p>RMMC is a private and non-sectarian Higher Educational Institution that has been serving the community of
        SOCSKSARGEN region, the nearby provinces and the whole of Mindanao. Now already on its 60th year, RMMC still
        continues her faithfulness to her commitment to providing a holistic education that has been proven time and
        again by the vast number of graduates spread all over the country and around the world who are already in their
        respective fields of endeavor with some holding significant positions in the rank and file. They are the living
        testimony of the worthwhile and relevant quality of education that only RMMC can give.</p>
      <div class="school-description__main__content__checkbox checkbox-text">
        <div class="school-description__main__content__checkbox__icon">&#x2713;</div>
        Our unique learning environment sparks physical growth
      </div>

      <a class="button--primary" href="contact.php">Get More Info</a>
    </div>

  </div>
</section>

<section class="top-courses index--section">

  <div class="top-courses__title-box">
    <p>Popular Courses</p>
    <h2>Our Top <span>Courses</span></h2>
  </div>

  <div class="course-cards-wrapper">
    <button primary class="prev-button" onclick="moveSlide('prev')">&#10094;</button>
      <div class="course-cards">

      </div>
      <button primary class="next-button" onclick="moveSlide('next')">&#10095;</button>
  </div>

</section>

<section class="charter index--section">
  <div class="charter__content">

    <div class="charter__content__left">
      <img src="assets/img/normal/about_1_2.png">
      <div class="charter__content__left__student">
        <p>Total Students</p>
        <div class="charter__content__left__student__avatar-list">
          <img alt="avatar" src="assets/img/normal/student_1_3_new.png">
          <img alt="avatar" src="assets/img/normal/student_1_3_new.png">
          <img alt="avatar" src="assets/img/normal/student_1_3_new.png">
          <img alt="avatar" src="assets/img/normal/student_1_3_new.png">
          <div>9000+</div>
        </div>
      </div>
    </div>

    <div class="charter__content__right">

      <h1>Vision</h1>
      <p>RMMC is an an institution of innovative development and excellence.</p>

      <h1>Mission</h1>
      <p>RMMC is committed to realize human potentials through holistic education.</p>

      <h1>Goals and Objectives</h1>
      <p>Provide holistic academic programs aligned with industry needs and standards.</p>
      <p>Create, disseminate, and utilize researches for the benefit of the community.</p>
      <p>Establish a highly visible community outreach program.</p>
      <p>Collaborate with working networks, linkages and consortia.</p>

      <h1>Core Values</h1>
      <p>Love of God</p>
      <p>Integrity</p>
      <p>Patriotism</p>
      <p>Service</p>
      <p>Excellence</p>

      <div class="charter__content__right__checklist">
        <div><div>&#x2713;</div> Competitive Rates</div>
        <div><div>&#x2713;</div> Online Certificates</div>
      </div>
    </div>
  </div>

  <section id="index-blogs">
    <div id="index-blogs__content">
      <p>News &amp; <span>Events</span></p>
      <div id="index-blogs__content__items"> <!-- News cards here ---> </div>
      <div id="index-blogs__content__option">
        <button class="button--primary" href="news.php">VIEW ALL</button>
      </div>
    </div>
  </section>

</section>

<?php include "footer.php" ?>
