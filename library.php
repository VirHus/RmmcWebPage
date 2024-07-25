<?php
$page = 'library';
require 'header.php';
?>
<?php include 'nav-bar.php' ?>
<link rel="stylesheet" href="styles/library.css">






    <!-- FOR SCROLL UP BUTTON
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

    </script> -->
<?php include 'footer.php' ?>