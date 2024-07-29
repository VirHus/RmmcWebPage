<?php
$page = 'library';
require 'header.php';
include 'nav-bar.php';
?>

<body>
  <div id="library">

    <div id="library-top">
      <ul class="library-top__links">
        <a href="" class="library-top__links__item">Home</a>
        <a href="" class="library-top__links__item">Librarian and Staff</a>
        <a href="" class="library-top__links__item">Online Resources</a>
        <a href="" class="library-top__links__item">Services</a>
        <a href="" class="library-top__links__item">Organizational Chart</a>
      </ul>

      <p id="library-top__title">Library</p>

      <!-- Dropdown Content -->
      <div class="library-top-hours-menus__dropdown" id="regular-semesters">
        <h3>Library Hours - Regular Semesters</h3>
          <p>Mondays - Thursday: 8:00 AM - 7:00 PM (No noon break)</p>
          <p>Friday: 8:00 AM - 5:00 PM (No noon break)</p>
          <p>Saturdays: 8:00 AM - 4:00 PM (No noon break)</p>
          <p>Saturdays: 8:00 AM - 4:00 PM (No noon break)</p>
      </div>
      <div class="library-top-hours-menus__dropdown" id="summer">
        <h3>Library Hours - Summer</h3>
          <p>Monday - Fridays: 8:00 AM - 5:00 PM (No noon break)</p>
          <p>Saturdays: 8:00 AM - 12:00 Noon (No noon break)</p>
      </div>

      <div id="library-top__subtitles">
        <p class="library-top__subtitles__list">Read and learn inside the newly refurbished library</p>
        <p class="library-top__subtitles__list text--mini">Check the new library hours</p>
      </div>

      <div id="library-top-hours">
        <div id="library-top-hours-menus">
          <div class="library-top-hours-menus__search-item" data-target='regular-semesters'>
            <p>REGULAR SEMESTERS</p>
            <div>&#9662;</div>
          </div>
          <div class="library-top-hours-menus__search-item" data-target='summer'>
            <p>SUMMER</p>
            <div>&#9662;</div>
          </div>
          <!-- <button class="search-button">Search Now</button> -->
        </div>
      </div>
    </div>

    <ul id="library-social-links">
      <a href="tel:305-8492">
        <i class="fa-solid fa-phone"></i>
      </a>
      <a href="mailto:rmmcinc.collegelibrary@gmail.com">
        <i class="fa-solid fa-envelope"></i>
      </a>
      <a href="https://www.facebook.com/rmmccollegelibrary">
        <i class="fab fa-facebook-f"></i>
      </a>
    </ul>

    <div id="library-charter">
      <div class="library-charter__row">
        <div class="library-charter__row__item">
          <h3>VISION</h3>
          <p>The RMMC College Library envisions to be recognized as a leading knowledge resource center dedicated to
            support the learning, teaching, and research needs of the patrons and its immediate communities.</p>
        </div>
        <div class="library-charter__row__item">
          <h3>MISSION</h3>
          <p>To attain its vision, the RMMC College Library will acquire various information sources in different forms,
            provide facilities and services, and preserve cultural heritage by developing, enriching, and preserving its
            Filipiniana collections.</p>
        </div>
        <div class="library-charter__row__item">
          <h3>GOALS</h3>
          <p>Offer the clients with the best and relevant information within a suitable environment. To achieve this
            goal, two major thrusts must be developed: <br><br>1. Development of library collection that will focus on subject
            areas which support the school’s academic programs and areas of research, and <br><br>2.Providing online resources
            and services.</p>
        </div>
      </div>
    </div>

    <div id="library-floors">
      <div class="library-floors__item">
        <h2>The College Library</h2>

        <div class="library-floors__item__content">
          <div class="library-floors__item__content__image-group">
            <div class="library-floors__item__content__image-group__item">
              <img src="assets/images/library-building-one.png" alt="Library 1">
              <div class="library-floors__item__content__image-group__item__text">
                <p></p>
                <p></p>
              </div>
            </div>
          </div>
          <p class="library-floors__item__content__description">
              The Library is located at the ERM building. It is a four-storey building where the ground floor houses
              the Graduate School Library. The second floor houses the General Circulating books, Periodical Section,
              and Office of the Library Director. The third floor houses the Filipiniana collections, Technical Section,
              and the Internet Section. The fourth floor houses the Audio Visual Room, Discussion/Work area space,
              Theatre, and Office of the Multimedia Specialist.
          </p>
        </div>
      </div>

      <div class="library-floors__item">
        <h2>The 2nd Floor Circulation Section</h2>

        <div class="library-floors__item__content">
          <div class="library-floors__item__content__image-group">
            <div class="library-floors__item__content__image-group__item">
              <img src="assets/images/library-one.png" alt="Library 1">
              <div class="library-floors__item__content__image-group__item__text">
                <p></p>
                <p></p>
              </div>
            </div>
          </div>
          <p class="library-floors__item__content__description">
              The 2nd floor of the library houses the circulation collections, periodicals, general references
              and
              fiction books. It is where the office of the library director is located. It is newly renovated
              with
              a state of the art design to capture the attention of the users, provide comfortable area to
              make
              their learning fun and memorable. It has security gate and 4 CCTV cameras for the safety of the
              collections.<br><br>Circulation counter is being provided where students can check- out and check-in
              their
              books with the help of a librarian and a support staff. There are 4 computer units which served
              as
              an Online Public Access Catalog (OPAC) station where users check titles of books/articles and
              other
              library resources in the fastest way. It has also individual carrels for students who want to
              concentrate and not to be disturbed.
          </p>
        </div>
      </div>

      <div class="library-floors__item">
        <h2>3rd Floor</h2>

        <div class="library-floors__item__content">
          <div class="library-floors__item__content__image-group">
            <div class="library-floors__item__content__image-group__item">
              <img src="assets/images/library-building-chairs.png" alt="Library 1">
              <div class="library-floors__item__content__image-group__item__text">
                <p></p>
                <p></p>
              </div>
            </div>
            <div class="library-floors__item__content__image-group__item">
              <img src="assets/images/library-five.png" alt="Library 2">
              <div class="library-floors__item__content__image-group__item__text">
                <p></p>
                <p></p>
              </div>
            </div>
          </div>
          <p class="library-floors__item__content__description">
            The 3rd floor is where the Filipiniana collections are located, the internet section and the Technical
            room. It has 12 reading tables and 7 individual carrels that can accommodate 103 users at a time.
          </p>
        </div>
      </div>

      <div class="library-floors__item">
        <h2>4th Floor</h2>

        <div class="library-floors__item__content">
          <div class="library-floors__item__content__image-group">
            <div class="library-floors__item__content__image-group__item">
              <img src="assets/images/library-three.png" alt="Library 1">
              <div class="library-floors__item__content__image-group__item__text">
                <p>Theatre</p>
                <p>Seating capacity of 145</p>
              </div>
            </div>
            <div class="library-floors__item__content__image-group__item">
              <img src="assets/images/library-four.png" alt="Library 2">
              <div class="library-floors__item__content__image-group__item__text">
                <p>The AVR</p>
                <p>Can accommodate 50 students at a time</p>
              </div>
            </div>
          </div>
          <p class="library-floors__item__content__description">
            This is where the discussion/work area room, AVR, theatre and office of the multimedia specialist is
            located. <br> Discussion and Work Area Room This area is intended for students who have group discussion
            and making their projects such as the Engineering, Accountancy and Education students.
          </p>
        </div>
      </div>
    </div>

    <div id="logo-message">
      <div id="logo-message-content">
        <div class="logo-message-content__item">
          <h3 class="logo-message-content__item__title">Ramon Magsaysay Memorial College Library</h3>
          <p class="logo-message-content__item__description">The Ramon Magsaysay Memorial Colleges (RMMC) maintains a
            library with resources and services to satisfy the needs of the many college constituents in terms of
            instruction, research, and extension. The library supports the reading and research needs of the students,
            instructors, researchers, administrators, and staff.</p>
        </div>
        <div class="logo-message-content__item">
          <img src="assets/images/rmmc-library-logo.png" alt="Library 3">
        </div>
      </div>

    </div>

  </div>
</body>
<?php include 'footer.php' ?>