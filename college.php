
   
<?php 
$page = 'college';
require 'header.php';
?>
<?php include 'nav_bar.php' ?>

<div class="colleges_main-container">

        <!-- NAVIGATIONS CONTAINER -->
        <div class="navigations-container">

             <!-- INCLUDE THE TOP NAVIGATION OF THE COLLEGES-->
            <div class="college-top-navigation-container">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ACADEMIC PROGRAMS</a></li>
                    <li><a href="#">ORGANIZATIONAL CHART</a></li>
                    <li><a href="#">PUBLICATION</a></li>
                    <li><a href="#">STUDENT ORGANIZATION</a></li>
                    <li><a href="#">NEWS & GALLERY</a></li>
                </ul>
            </div>
          
           
            <!-- FOR COLLEGE LOGO-->
            <div class="bg-logo-container">
                <image src="assets/img/breadcumb/CETNEWBKG.png" class="bg-logo"></image>
            </div>

             <!--FOR COLLEGES SUB NAVIGATION-->           
            <div class="courses-subNav-container">
                <ul class="colleges-list">
                    <li><a href="#" class="college-home">COLLEGE OF ENGINEERING AND TECHNOLOGY</a></li>

                    <ul class="college-department-list">
                        <li><a href="#">ITE </a></li> 
                        <li><a href="#">CE </a></li>                      
                    </ul>
                    
                </ul>
                
            </div>
        </div>
   
 <!--FOR COLLEGE LOGO, MISSION, VISSION, AND GOALS-->
    <section>
        <div class="logo-and-mv-container">

            <div class="logo-container">
                <image src="_assets/COLLEGE_LOGOS/CET.png" class="logo"></image>
            </div>

            <div class="mission-vission-container">
                <!--FOR MISSION-->
                <div class="mission-container">
                    <div class="mission-text">Mission</div>
                    <p>
                        Our mission is to offer a transformative educational program that develops critical
                        thinking, creativity, and technical proficiency in engineering and technology. We want to build a
                        diverse community of students and professors committed to solving complex problems and changing the
                        world via cutting-edge research, industrial partnerships, and community involvement.
                    </p>
                </div>

                <!--FOR VISSION-->
                <div class="vission-container">
                    <div class="vission-text">Vission</div>
                    <p>
                        To be recognized as an institution of excellence in engineering and technology
                        education, research, and innovation that equips students to become ethical and skilled professionals
                        who contribute to society and promote sustainable development.
                    </p>
                </div>
                <!--FOR GOALS-->
                <div class="goals-container">
                    <div class="goals-text">Goals</div>
                    <ul>
                        <li>Academic Excellence </li>
                        <li>Research and Innovation </li>
                        <li>Student Success </li>
                        <li>Global Engagement </li>
                        <li>Community Outreach</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

     

 <!-- FOR SCROLL UP BUTTON-->
    <div class="colleges_scroll-button-container">
        <a href="#" class="colleges_scroll-up-link-button"><image src="assets/img/icon/arrow-up.png" class="up-arrow-icon" alt="Up Arrow"></image></a>
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
                scrollButton.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default anchor behavior
                    scrollToTop();
               });

        </script>
   
</div>
<?php  include 'footer.php'?>
