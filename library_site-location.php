<?php
$page = 'library';
require 'header.php';
?>
<?php include 'nav-bar.php' ?>
<link rel="stylesheet" href="styles/college.css">

<div class="colleges_main-container">

    <!-- NAVIGATIONS CONTAINER -->
    <div class="navigations-container">

        <!-- INCLUDE THE TOP NAVIGATION OF THE COLLEGES-->
        <div class="college-top-navigation-container">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">SITE AND LOCATION</a></li>
                <li><a href="#">FACULTY AND STAFF</a></li>
                <li><a href="#">ORGANIZATIONAL CHART</a></li>
                <li><a href="#">PUBLICATION</a></li>
                <li><a href="#">STUDENT ORGANIZATION</a></li>
                <li><a href="#">NEWS & GALLERY</a></li>
            </ul>
        </div>


        <!-- FOR COLLEGE LOGO-->
        <div class="bg-logo-container">
            <image src="assets/img/breadcumb/LIBRARYBG.png" class="bg-logo"></image>
        </div>

    </div>

    <!--FOR COLLEGE LOGO, MISSION, VISSION, AND GOALS-->
    <section>
        <div class="logo-and-mv-container">

            <!-- <div class="logo-container">
                <image src="assets/img/rmmc-library-logo.png" class="logo"></image>
            </div>

            <div class="mission-vission-container">

                <div class="mission-container">
                    <div class="mission-text">Vision</div>
                    <p>
                        The RMMC College Library envisions to be recognized as a leading knowledge resource
                        center dedicated to support the learning, teaching, and research needs of the patrons
                        and its immediate communities.
                    </p>
                </div>


                <div class="vission-container">
                    <div class="vission-text">Mission</div>
                    <p>
                        To attain its vision, the RMMC College Library will acquire various information sources
                        in different forms, provide facilities and services, and preserve cultural heritage by
                        developing, enriching, and preserving its Filipiniana collections.
                    </p>
                </div>
 
                <div class="goals-container">
                    <div class="goals-text">Goals</div>
                    <ul>Offer the clients with the best and relevant information within a suitable environment.
                        <p>To achieve this goal, two major thrusts must be developed:
                            1.Development of library collection that will focus on subject areas which support the
                            school’s academic programs and areas of research, and
                            <br>2.Providing online resources and services.
                        </p>
                    </ul>
                </div>

                <div class="goals-container">
                    <div class="goals-text">Objectives</div>
                    <ul>
                        <p>1.Provide a student - centered learning environment and services.
                            <br>
                            2.Promote critical thinking through information literacy.
                            <br>
                            3.Empower users to locate, evaluate, and use information available in a variety of
                            innovative and traditional formats.
                            <br>
                            4.Develop and maintain collections in support of the academic pursuit of the college.
                    </ul>
                </div>

            </div> -->

            
        </div> 

        
    </section>



    <!-- FOR SCROLL UP BUTTON-->
    <div class="colleges_scroll-button-container">
        <a href="#" class="colleges_scroll-up-link-button">
            <image src="assets/img/icon/arrow-up.png" class="up-arrow-icon" alt="Up Arrow"></image>
        </a>
    </div>


    <script>
        // Select the scroll up button
        const scrollButton = document.querySelector('.colleges_scroll-up-link-button');

        // Function to toggle visibility and position of the scroll button
        function toggleScrollButton() {
            if (window.scrollY > 200) { // Adjust the scroll threshold as needed
                scrollButton.style.opacity = '1';
                scrollButton.style.transform = 'translateY(0)'; // Bring button into view
            } else {
                scrollButton.style.opacity = '0';
                scrollButton.style.transform = 'translateY(-100vh)'; // Move button offscreen
            }
        }

        // Smooth scroll function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'  // Add smooth scrolling behavior
            });
        }

        // Event listener for scrolling
        window.addEventListener('scroll', toggleScrollButton);

        // Event listener for scroll up button click
        scrollButton.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            scrollToTop();
        });

    </script>

</div>
<?php include 'footer.php' ?>