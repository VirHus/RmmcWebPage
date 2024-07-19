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

        <div class="page_titlle_container">
            <span>FACULTY AND STAFF</span>
        </div>

<!-- CONTENT-->
<div class="faculty_and_staff_data_container">
    <?php
    // Example PHP array for staff data
    $staffMembers = [
        [
            'name' => 'FULL NAME ',
            'email' => 'your@gmail.com',
            'tel' => '##########',
            'orcid' => '######',
            'profileImg' => 'assets/img/normal/student_1_3_new.png',
            'positions' => ['MSIS, Dean of College of Engineering and Technology'],
            'educationalAttainment' => [
                'List',
                'List',
                'List',
                '...'
            ],
            'fieldsOfSpecialization' => ['List','List','...'],
            'researchInterests' => ['List', 'List', 'List','...']
        ],
        [
            'name' => 'BENJAR BULACON',
            'email' => 'ikawbahaladiriah@gmail.com',
            'tel' => 'wewewewewe',
            'orcid' => '34234234',
            'profileImg' => 'assets/img/normal/student_1_3_new.png',
            'positions' => ['Company Director ng wala naga exist na company'],
            'educationalAttainment' => [
                'Bachelor of Di Sigurado sa Life',
                'Master of Malaks Kumain Pero Di Tumataba',
                'Doctor of Philosophy in Virtual World Language (Completed Academic Requirements)Doctor of Philosophy in Virtual World Language (Completed Academic Requirements)'
            ],
            'fieldsOfSpecialization' => ['Language'],
            'researchInterests' => ['Linguistics', 'Language and Culture', 'Mindanao Studies']
        ],
        [
            'name' => 'BENJAR BULACON',
            'email' => 'bastaoki@gmail.com',
            'tel' => 'oki kaayo',
            'orcid' => '123alabyu',
            'profileImg' => 'assets/img/normal/student_1_3_new.png',
            'positions' => ['Tambay lng sa kanto'],
            'educationalAttainment' => [
                'Bachelor of Arts in English',
                'Master of English in Applied Linguistics',
                'Doctor of Philosophy in English Studies major in Language (Completed Academic Requirements)'
            ],
            'fieldsOfSpecialization' => ['Language'],
            'researchInterests' => ['Linguistics', 'Language and Culture', 'Mindanao Studies']
        ]
       
    ];

    foreach ($staffMembers as $index => $staff) {
    ?>
    <div class="staff_container">
        <div class="profile_container">
            <img src="<?php echo $staff['profileImg']; ?>" class="staff_profile">
        </div>
             
        <div class="staff_info_container">
            <div class="staff_name_and_profile_button_container">
                <ul>
                    <li class="profile_name_tab <?php echo $index === 0 ? 'active' : ''; ?>"><img src="assets/img/icon/user-icon.png"><span><?php echo $staff['name']; ?></span></li>
                    <li class="profile_background_tab"><img src="assets/img/icon/circle-info-icon.png">PROFILE</li>
                </ul>
            </div>

            <div class="profile_name_container <?php echo $index === 0 ? 'active' : ''; ?>">
                <div class="name_container">
                    <h1><?php echo $staff['name']; ?></h1>
                    <ul>
                        <?php foreach ($staff['positions'] as $position) { ?>
                        <li><?php echo $position; ?></li>
                        <?php } ?>
                        <li>Email: <span><?php echo $staff['email']; ?></span></li>
                        <li>Tel: <span><?php echo $staff['tel']; ?></span></li>
                        <li>ORCID No.: <span><?php echo $staff['orcid']; ?></span></li>
                    </ul>
                </div>
            </div>
            <div class="staff_profile_background_container">
                <div class="educ_attainment_container">
                    <h4>EDUCATIONAL ATTAINMENT</h4>
                    <ul>
                        <?php foreach ($staff['educationalAttainment'] as $education) { ?>
                        <li><?php echo $education; ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="fields_specialization_container">
                    <h4>FIELD/S OF SPECIALIZATION</h4>
                    <ul>
                        <?php foreach ($staff['fieldsOfSpecialization'] as $field) { ?>
                        <li><?php echo $field; ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="research_interest_container">
                    <h4>RESEARCH INTEREST</h4>
                    <ul>
                        <?php foreach ($staff['researchInterests'] as $interest) { ?>
                        <li><?php echo $interest; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
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
    let staffContainers = document.querySelectorAll(".staff_container");

    staffContainers.forEach(function(container) {
        let profileNameTab = container.querySelector(".profile_name_tab");
        let profileBackgroundTab = container.querySelector(".profile_background_tab");
        let profileNameContainer = container.querySelector(".profile_name_container");
        let profileBackgroundContainer = container.querySelector(".staff_profile_background_container");

        profileNameTab.addEventListener("click", function() {
            // Remove 'active' class from all tabs and containers within the same staff_container
            container.querySelectorAll('.profile_name_tab, .profile_background_tab, .profile_name_container, .staff_profile_background_container').forEach(function(el) {
                el.classList.remove('active');
            });
            profileNameContainer.classList.add("active");
            profileNameTab.classList.add("active");
        });

        profileBackgroundTab.addEventListener("click", function() {
            // Remove 'active' class from all tabs and containers within the same staff_container
            container.querySelectorAll('.profile_name_tab, .profile_background_tab, .profile_name_container, .staff_profile_background_container').forEach(function(el) {
                el.classList.remove('active');
            });
            profileBackgroundContainer.classList.add("active");
            profileBackgroundTab.classList.add("active");
        });
    });

    // Set the default active tab and content for all staff containers
    staffContainers.forEach(function(container) {
        let profileNameTab = container.querySelector(".profile_name_tab");
        let profileNameContainer = container.querySelector(".profile_name_container");
        profileNameTab.classList.add("active");
        profileNameContainer.classList.add("active");
    });
});
</script>

        

   
</div>
<?php  include 'footer.php'?>