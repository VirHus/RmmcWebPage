<?php
$page = 'library-services';
require 'header.php';
include 'nav-bar.php';
?>

<body>


    <div class="main">
        <div class="library_services">
            <div class="library_services__top">

                <ul class="library_services__top__links">
                    <a href="library.php" class="library_services__top__links__list">
                        HOME
                    </a>
                    <a href="" class="library_services__top__links__list">
                        LIBRARIAN AND STAFF
                    </a>
                    <a href="" class="library_services__top__links__list">
                        ONLINE RESOURCES
                    </a>
                    <a href="library-services.php" class="library_services__top__links__list">
                        SERVICES
                    </a>
                    <a href="" class="library_services__top__links__list">
                        ORGANIZATIONAL CHART
                    </a>
                </ul>

                <p id="library_services__top__title">Library Services</p>

            </div>

            <div class="library_services__page">
                <div class="library_services__page__nav">

                    <!-- Readers/Circulation Services Page -->
                    <div class="library_services__page__nav__left active" id="readers-circulation-services">
                        <h2 class="library_services__page__title">Readers/Circulation Services</h2>

                        <div id="tabs">
                            <button class="tablinks" onclick="openTab(event, 'Tab1')">Readers/Circulation
                                Services</button>
                            <button class="tablinks" onclick="openTab(event, 'Tab2')">Circulation Process </button>
                            <button class="tablinks" onclick="openTab(event, 'Tab3')">Charging/Discharging
                                Process</button>
                        </div>

                        <div id="Tab1" class="tabcontent">
                            <h3 class="tabcontent__title">Readers/Circulation Services</h3>
                            <p class="tabcontent__description">To keep library users using the facilities and
                                information resources, readers/circulation
                                services are offered. It comprises services like book lending and retrieval, help with
                                literature searches, book location, shelving, and the recall of borrowed books.</p>

                            <h3 class="tabcontent__subtitle">Functions:</h3>

                            <li>
                                To serve effectively and efficiently all library users;
                            </li>
                            <li>
                                To assist students and other library users in using the Online Public Access Catalog
                                (OPAC);
                            </li>
                            <li>
                                To become responsive to the needs of the students and teachers with interest and
                                problems in research;
                            </li>
                            <li>
                                To provide efficient service.
                            </li>

                        </div>

                        <div id="Tab2" class="tabcontent">
                            <h3 class="tabcontent__title">Circulation Process</h3>
                            <p class="tabcontent__description">The main responsibility of the libraries is circulation.
                                Its goal is to
                                increase the use of all resources to accommodate a large number of library patrons. To
                                do
                                this, a reliable charging mechanism is installed.</p>

                            <h3 class="tabcontent__subtitle">Activities:</h3>
                            <li>
                                Students who are officially enrolled are required to present their school ID.
                            </li>
                            <li>
                                Check in and check out of books and other library materials;
                            </li>
                            <li>
                                Assist readers in the use of library catalog- OPAC and explain the arrangement of the
                                books on the shelves;
                            </li>
                            <li>
                                Keep statistical records as basis in planning and carrying out the circulation job in
                                terms of users’ demand;
                            </li>
                            <li>
                                Assist/help students/users in the selection of books and other materials for reading;
                            </li>
                            <li>
                                Keep track and control the circulation of library materials to make it available to
                                other users;
                            </li>
                            <li>
                                Shelf-read books in stacks to ensure all library materials are on their proper places.
                            </li>

                        </div>

                        <div id="Tab3" class="tabcontent">
                            <h3 class="tabcontent__title">Charging/Discharging Process</h3>
                            <h4 class="tabcontent__subtitle">Regular Procedure:</h4>
                            <p class="tabcontent__description">The library must adopt its own system in charging and
                                discharging of library materials in
                                order to record and trace the borrowers of the book. The following system is followed at
                                the
                                RMMC College Library:</p>

                            <li>
                                In borrowing book, a student must present his/her school ID to the librarian together
                                with
                                the book he/she wishes to borrow;
                            </li>
                            <li>
                                The borrower signs the date due slip attached to the last page of the book;
                            </li>
                            <li>
                                The librarian checks out the book/s in the library system by scanning the barcode of the
                                borrowers’ ID, followed by scanning the barcode of the book and indicate the due date;
                            </li>
                            <h4 class="tabcontent__subtitle">Online Procedure:</h4>
                            <li>
                                Librarian receive online book reservation via the official FBpage of the college
                                library;
                                <a href="https://www.facebook.com/rmmccollegelibrary"> RMMC COLLEGE LIBRARY</a>
                            </li>
                            <li>
                                Relevant information is needed, upon compliance by the borrower, the book will be
                                check-out under the borrowers’ name within the day. If not claimed, it will be
                                checked-in and return to the shelf and the librarian will notify the borrower of the
                                failed
                                transaction;
                            </li>

                            <h4 class="tabcontent__subtitle">Checking-in (Returning of borrowed books)</h4>
                            <li>
                                Student returns loaned out book/s;
                            </li>
                            <li>
                                Librarian check/scan the condition of the book/s to make sure the books doesn’t have
                                any
                                markings or missing pages. Scan the barcode of the books and check-in the book in the
                                library system. If it is overdue, inform the borrower. Print transaction receipt and
                                give it
                                to the borrower. Book/s are then placed at the cart for shelving.
                            </li>
                        </div>

                    </div>

                    <!-- Reference Book Services Page -->
                    <div class="library_services__page__nav__left" id="reference-book-services">
                        <h2 class="library_services__page__title">Reference Book Services</h2>

                        <div id="reference-book-services-content">
                            <h3 class="reference-book-services-content__title">The Reference Process</h3>
                            <p class="reference-book-services-content__description">To offer library users with
                                information is the primary goal of the reference service. Access to the resources for
                                information the reference work is specifically concerned with helping users with
                                information and resource use for their research and study. To fulfil the request of the
                                patron, the librarian swiftly and effectively offers the information required to
                                accomplish this goal</p>

                            <h3 class="reference-book-services-content__subtitle"> Objective of Reference:</h3>

                            <ul id="list">
                                <li>
                                    Conduct reference interview to determine and understand the needs of the clients.
                                </li>
                                <li>
                                    Help the client find the needed information and provide guidance in the choice of
                                    materials
                                </li>
                                <li>
                                    Give instructions on the use of the library tool - Online Public Access Catalog
                                    (OPAC)
                                    and electronic databases.
                                </li>
                                <li>
                                    List down reference questions that were not answered for future possible solutions.
                                </li>
                                <li>
                                    Teach students how to love books and make books as part of their life.
                                </li>
                                <li>
                                    Answer reference questions promptly
                                </li>
                                <li>
                                    Maintain information files
                                </li>
                                <li>
                                    Maintain reference statistics.
                                </li>

                            </ul>

                            <h3 class="reference-book-services-content__title">Use of OPAC</h3>
                            <p class="reference-book-services-content__description">The term "Online Public Access
                                Catalogue" is abbreviated as OPAC. It is a resource access tool and directory for the
                                library's or libraries' resource collection, offering bibliographic data in
                                machine-readable form that users may search on a computer terminal. An organized listing
                                of a collection's contents at a specific library is called the OPAC. Its objective is to
                                make it possible for a collection user to discover the precise position of the data
                                within the collection. Libraries play a crucial role in the global growth of higher
                                education. The college library, which serves as the foundation of the academic
                                community, provides reasonable resources to support educational, research, and learning
                                objectives, supplementing classroom instruction. </p>
                        </div>

                    </div>

                    <!-- Library Orientation and Instruction Page -->
                    <div class="library_services__page__nav__left" id="library-orientation-and-instruction">
                        <h2 class="library_services__page__title">Library Orientation and Instruction</h2>
                        <div id="library-orientation-and-instruction-content">
                            <p class="library-orientation-and-instruction-content__description">The library offers
                                orientation and instruction, lectures to freshmen students every beginning of the
                                semester. These lectures are designed to familiarize the students with the essential
                                tools for learning and with the library services. </p>
                        </div>
                    </div>

                    <!-- Inter-Library Loan/Referral Service Page-->
                    <div class="library_services__page__nav__left" id="inter-library-loan-referral-service">
                        <h2 class="library_services__page__title">
                            Inter-library Loan/Referral Service </h2>
                        <div id="inter-library-loan-referral-service-content">
                            <p class="inter-library-loan-referral-service-content__description">The library offers
                                referral services to students who wish to make use of other library resources by giving
                                referral slips so that they will be catered. Thus other users are also catered as long
                                as they have a referral slip from their librarian or heads of offices.</p>
                        </div>
                    </div>

                    <!-- Internet Service Page -->
                    <div class="library_services__page__nav__left" id="internet-service">
                        <h2 class="library_services__page__title">Internet Service</h2>
                        <div id="internet-service-content">
                            <p class="internet-service-content__description">The library has 25 units of computer with
                                internet connection to allow the users to access the World Wide Web and search topics in
                                wide range of interest.</p>
                        </div>
                    </div>

                    <!-- Bulletin Board Display and Exhibits Page -->
                    <div class="library_services__page__nav__left" id="bulletin-board-display-and-exhibits"></div>

                    <div class="library_services__page__nav__right">
                        <h3 class="library_services__page__nav__right__title">LIBRARY SERVICES</h3>
                        <ul class="library_services__page__nav__right__links">
                            <li class="library_services__page__nav__right__links__item"> 
                                <a href="library.php" class="library_services__page__nav__right__links__item">Home</a>
                            </li>
                            <li class="library_services__page__nav__right__links__item"
                                data-target="readers-circulation-services" class="active">Readers/Circulation Services
                            </li>
                            <li class="library_services__page__nav__right__links__item"
                                data-target="reference-book-services">Reference Book Services
                            </li>
                            <li class="library_services__page__nav__right__links__item"
                                data-target="library-orientation-and-instruction">Library Orientation and Instruction
                            </li>
                            <li class="library_services__page__nav__right__links__item"
                                data-target="inter-library-loan-referral-service">Inter-library Loan/Referral Service
                            </li>
                            <li class="library_services__page__nav__right__links__item" data-target="internet-service">
                                Internet Service</li>
                            <li class="library_services__page__nav__right__links__item"
                                data-target="bulletin-board-display-and-exhibits">Bulletin Board Display and Exhibits
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

<?php include 'footer.php' ?>