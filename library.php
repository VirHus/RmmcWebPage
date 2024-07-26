<?php
$page = 'library';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library.css">

<body>

<div class="main">
    <div class="home__page">
        <!-- <img class="bgImage" src="assets/img/library_place.png" alt=""> -->
        <ul class="nav__links">
            <a href="" class="links">HOME</a>
            <a href="" class="links">FACULTY AND STAFF</a>
            <a href="" class="links">SITE LOCATION</a>
            <a href="" class="links">ORGANIZATIONAL CHART</a>
        </ul>

        <p id="title">Library</p>
        <div id="subtitles">
            <p class="subtitles__item">Read and learn inside the fresh new library</p>
            <p class="subtitles__item text--mini">LIBRARY HOURS</p>
        </div>

        <div class="search-bar-container">
            <div class="search-bar">
                <div class="search-item" onclick="toggleDropdown('regular-semesters')">
                    <span>REGULAR SEMESTERS</span>
                    <span class="dropdown-arrow">&#9662;</span>
                </div>
                <div class="search-item" onclick="toggleDropdown('summer')">
                    <span>SUMMER</span>
                    <span class="dropdown-arrow">&#9662;</span>
                </div>
                <!-- <button class="search-button">Search Now</button> -->
            </div>

            <!-- Dropdown Content -->
            <div class="dropdown-content" id="regular-semesters">
                <h3>Library Hours - Regular Semesters</h3>
                <p>Mondays - Thursday: 8:00 AM - 7:00 PM (No noon break)</p>
                <p>Friday: 8:00 AM - 5:00 PM (No noon break)</p>
                <p>Saturdays: 8:00 AM - 4:00 PM (No noon break)</p>
            </div>
            <div class="dropdown-content" id="summer">
                <h3>Library Hours - Summer</h3>
                <p>Monday - Fridays: 8:00 AM - 5:00 PM (No noon break)</p>
                <p>Saturdays: 8:00 AM - 12:00 Noon (No noon break)</p>
            </div>
        </div>


    </div>

    <div class="additional__content">

    </div>


    <script>
        function toggleDropdown(id) {
            var content = document.getElementById(id);
            var allContents = document.getElementsByClassName('dropdown-content');

            for (var i = 0; i < allContents.length; i++) {
                if (allContents[i] !== content) {
                    allContents[i].style.display = 'none';
                }
            }

            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        }

    </script>

</div>
</body>
<!-- <?php include 'footer.php' ?>  -->