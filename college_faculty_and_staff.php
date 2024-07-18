<?php 
$page = 'college_faculty_staff';
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

<!-- CONTENT-->

<div class="faculty_and_staff_data_container">
    <div class="staff_container">
        <div class="staff_name_and_profile_button_container">
            <ul>
                <li class="profile_name_tab"><img src="assets/img/icon/user-icon.png"><span>BENJAR BULACON</span></li>
                <li class="profile_background_tab"><img src="assets/img/icon/circle-info-icon.png">PROFILE</li>
            </ul>
        </div>
        <div class="staff_info_container">
            <div class="profile_name_container">
                <div class="profile_container">
                    <img src="assets/img/normal/student_1_3_new.png" class="staff_profile">
                </div>
                <div class="name_container">
                    <h1>BENJAR BULACON</h1>
                    <ul>
                        <li>Assistant Professor Head, CAS Extension</li>
                        <li>Email: <span>wahahah@gmail.com</span></li>
                        <li>Tel:<span>wewewewewe</span></li>
                        <li>ORCID No.:<span>34234234</span></li>
                    </ul>
                </div>
            </div>
            <div class="staff_profile_background_container">
                <div class="educ_attainment_container">
                    <h4>EDUCATIONAL ATTAINMENT</h4>
                    <ul>
                        <li>Bachelor of Arts in English</li>
                        <li>Master of English in Applied Linguistics</li>
                        <li>Doctor of Philosophy in English Studies major in Language (Completed Academic Requirements)</li>
                    </ul>
                </div>
                <div class="fields_specialization_container">
                    <h4>FIELD/S OF SPECIALIZATION</h4>
                    <ul>
                        <li>Language</li>
                    </ul>
                </div>
                <div class="research_interest_container">
                    <h4>RESERCH INTEREST</h4>
                    <ul>
                        <li>Linguistics</li>
                        <li>Language and Culture</li>
                        <li>Mindanao Studies</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const profileNameTab = document.querySelector(".profile_name_tab");
            const profileBackgroundTab = document.querySelector(".profile_background_tab");
            const profileNameContainer = document.querySelector(".profile_name_container");
            const profileBackgroundContainer = document.querySelector(".staff_profile_background_container");

            profileNameTab.addEventListener("click", function() {
                profileNameContainer.style.display = "block";
                profileBackgroundContainer.style.display = "none";
                profileNameTab.classList.add("active");
                profileBackgroundTab.classList.remove("active");
            });

            profileBackgroundTab.addEventListener("click", function() {
                profileNameContainer.style.display = "none";
                profileBackgroundContainer.style.display = "block";
                profileBackgroundTab.classList.add("active");
                profileNameTab.classList.remove("active");
            });
        });
    </script>

        

   
</div>
<?php  include 'footer.php'?>