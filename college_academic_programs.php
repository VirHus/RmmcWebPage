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
                    <li><a href="#">FACULTY AND STAFF</a></li>
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

        </div>

        <div class="organizational_chart_container">
        </div>


   


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