<?php
$page = 'library_services';
require 'header.php';
include 'nav-bar.php';
?>

<link rel="stylesheet" href="styles/library_services.css">

<body>


    <div class="main">
    <div class="library_services">
        <div class="library_services__top">
            <!-- <img class="bgImage" src="assets/img/library_place.png" alt=""> -->

            <ul class="library_services__top__links">
                <a href="library.php" class="library_services__top__links__list">HOME</a>
                <a href="" class="library_services__top__links__list">LIBRARIAN AND STAFF</a>
                <a href="" class="library_services__top__links__list">ONLINE RESOURCES</a>
                <a href="" class="library_services__top__links__list">SERVICES</a>
                <a href="" class="library_services__top__links__list">ORGANIZATIONAL CHART</a>
            </ul>

            <p id="library_services__top__title">Readers/Circulation Services</p>

        </div>

        <div class="library_services__page">

            <h2 class="library_services__page__title">Readers/Circulation Services</h2>
            <div class="library_services__page__nav">

                <div class="library_services__page__nav__left">
                    <div id="tabs">
                        <button class="tablinks" onclick="openTab(event, 'Tab1')">Readers/Circulation Services</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')">Circulation Process </button>
                        <button class="tablinks" onclick="openTab(event, 'Tab3')">Charging/Discharging Process</button>
                    </div>

                    <div id="Tab1" class="tabcontent">
                        <h3 class="tabcontent__title">Readers/Circulation Services</h3>
                        <p class="tabcontent__description">To keep library users using the facilities and information resources, readers/circulation
                            services are offered. It comprises services like book lending and retrieval, help with
                            literature searches, book location, shelving, and the recall of borrowed books.</p>

                        <h3 class="tabcontent__subtitle">Functions:</h3>
                        <li>To serve effectively and efficiently all library users;</li>
                        <li>To assist students and other library users in using the Online Public Access Catalog
                            (OPAC);</li>
                        <li>To become responsive to the needs of the students and teachers with interest and problems
                            in research;</li>
                        <li>To provide efficient service.</li>
                    </div>

                    <div id="Tab2" class="tabcontent">
                        <h3 class="tabcontent__title">Circulation Process</h3>
                        <p class="tabcontent__description">The main responsibility of the libraries is circulation. Its goal is to
                            increase the use of all resources to accommodate a large number of library patrons. To do
                            this, a reliable charging mechanism is installed.</p>

                        <h3 class="tabcontent__subtitle">Activities:</h3>
                        <li>Students who are officially enrolled are required to present their school ID.</li>
                        <li>Check in and check out of books and other library materials;</li>
                        <li>Assist readers in the use of library catalog- OPAC and explain the arrangement of the books
                            on the shelves;</li>
                        <li>Keep statistical records as basis in planning and carrying out the circulation job in terms
                            of users’ demand;</li>
                        <li>Assist/help students/users in the selection of books and other materials for reading;</li>
                        <li>Keep track and control the circulation of library materials to make it available to other
                            users;</li>
                        <li>Shelf-read books in stacks to ensure all library materials are on their proper places.</li>
                    </div>

                    <div id="Tab3" class="tabcontent">
                        <h3 class="tabcontent__title">Charging/Discharging Process</h3>
                        <h4 class="tabcontent__subtitle">Regular Procedure:</h4>
                        <p class="tabcontent__description">The library must adopt its own system in charging and discharging of library materials in
                            order to record and trace the borrowers of the book. The following system is followed at the
                            RMMC College Library:</p>

                        <li>In borrowing book, a student must present his/her school ID to the librarian together with
                            the book he/she wishes to borrow;</li>
                        <li>The borrower signs the date due slip attached to the last page of the book;</li>
                        <li>The librarian checks out the book/s in the library system by scanning the barcode of the
                            borrowers’ ID, followed by scanning the barcode of the book and indicate the due date;</li>
                        <h4 class="tabcontent__subtitle">Online Procedure:</h4>
                        <li>1.Librarian receive online book reservation via the official FBpage of the college library;
                        </li>
                        <li>2.Relevant information is needed, upon compliance by the borrower, the book will be
                            check-out under the borrowers’ name within the day. If not claimed, it will be checked-in
                            and return to the shelf and the librarian will notify the borrower of the failed
                            transaction;</li>

                        <h4 class="tabcontent__subtitle">Checking-in (Returning of borrowed books)</h4>
                        <li>1.Student returns loaned out book/s;</li>
                        <li>2.Librarian check/scan the condition of the book/s to make sure the books doesn’t have any
                            markings or missing pages. Scan the barcode of the books and check-in the book in the
                            library system. If it is overdue, inform the borrower. Print transaction receipt and give it
                            to the borrower. Book/s are then placed at the cart for shelving.</li>
                    </div>
                </div>
                <div class="library_services__page__nav__right">
                    <h3 class="library_services__page__nav__right__title">LIBRARY SERVICES</h3>
                    <ul class="library_services__page__nav__right__links">
                        <a href="library.php">Home</a>
                        <a href="" class="active">Readers/Circulation Services</a>
                        <a href="">Reference Book Services</a>
                        <a href="">Library Orientation and Instruction</a>
                        <a href="">Inter-library Loan/Referral Service</a>
                        <a href="">Internet Service</a>
                        <a href="">Bulletin Board Display and Exhibits</a>
                        
                    </ul>
                </div>

            </div>

        </div>

    </div>
    </div>


    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Default open tab
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('.tablinks').click();
        });

    </script>
</body>

<?php include 'footer.php' ?>