<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLA University - Home</title>
    <!-- Linking to Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Linking to external CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <!-- Sticky Navbar with Black Background -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <!-- Left corner: Logos of GLA University -->
            <a class="navbar-brand" href="#">
                <div class="d-flex align-items-center">
                    <img src="https://www.gla.ac.in/images/gla-university-logo.webp" alt="GLA University Logo 1" class="navbar-logo">
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <img src="https://www.gla.ac.in/images/naac-logo-1.webp" alt="NAAC Logo" class="navbar-logo">
                </div>
            </a>

            <!-- Navbar Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right corner: Buttons -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="admission_query.php">Admission Query</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="tel:+919027068068">
                            <span class="phone-icon">&#9742;</span> +91 9027068068
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel (Image Slider) -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <!-- First Image -->
            <div class="carousel-item active">
                <img src="https://www.gla.ac.in/Uploads/banner/101hbanner_OffCampusWebsiteBanner.jpg" class="d-block w-100" alt="First slide">
            </div>
            <!-- Second Image -->
            <div class="carousel-item">
                <img src="https://www.gla.ac.in/Uploads/banner/99hbanner_admission-open.jpg" class="d-block w-100" alt="Second slide">
            </div>
            <!-- Third Image -->
            <div class="carousel-item">
                <img src="https://www.gla.ac.in/Uploads/banner/90hbanner_adm-open-2.jpg" class="d-block w-100" alt="Third slide">
            </div>
            <!-- Fourth Image -->
            <div class="carousel-item">
                <img src="https://www.gla.ac.in/Uploads/banner/95hbanner_Ranking-banner.jpg" class="d-block w-100" alt="Fourth slide">
            </div>
            <!-- Fifth Image -->
            <div class="carousel-item">
                <img src="https://www.gla.ac.in/Uploads/banner/93hbanner_banner-13-new.jpg" class="d-block w-100" alt="Fifth slide">
            </div>
        </div>
        <!-- Carousel Controls (Optional) -->
        <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- "A Legacy of Educational Excellence" Text -->
    <div class="legacy-text" id="legacyText">
        A Legacy of Educational Excellence
    </div>

    <!-- 4 Sections with Numbers and Images -->
    <div class="container">
        <div class="row stat-section" id="statSection1">
            <div class="col-md-3">
                <div class="stat-number">86%</div>
                <img src="https://www.gla.ac.in/images/icon1.webp" class="stat-image" alt="Placement Icon">
                <div class="stat-text">Overall Placement in Past 5 Years</div>
            </div>
            <div class="col-md-3">
                <div class="stat-number">39,000+</div>
                <img src="https://www.gla.ac.in/images/icon2.webp" class="stat-image" alt="Alumni Icon">
                <div class="stat-text">Alumni Settled across the Globe</div>
            </div>
            <div class="col-md-3">
                <div class="stat-number">700+</div>
                <img src="https://www.gla.ac.in/images/icon3.webp" class="stat-image" alt="Faculty Icon">
                <div class="stat-text">Faculty Members from Global Institutions</div>
            </div>
            <div class="col-md-3">
                <div class="stat-number">23,000+</div>
                <img src="https://www.gla.ac.in/images/icon4.webp" class="stat-image" alt="Students Icon">
                <div class="stat-text">Students Enrolled in Different Courses</div>
            </div>
        </div>
    </div>

    <!-- Image Section (University Sketch) -->
    <div class="image-section">
        <img src="https://www.gla.ac.in/images/university-sketch.webp" alt="University Sketch">
    </div>

    <!-- Achievers Section -->
    <div class="achievers-heading">Achievers</div>
    <div class="achievers-text">
        At GLA University, we are proud of our students for achieving <br> top positions in public, private, and corporate sector.
    </div>

    <!-- 4 Stats in Square Format -->
    <div class="container text-center">
        <div class="stat-square">
            <div class="stat-number">3000+</div>
            <div class="stat-text">Placement Offers for Previous Batch</div>
        </div>
        <div class="stat-square">
            <div class="stat-number">500+</div>
            <div class="stat-text">Global Recruiters from Diverse Domains</div>
        </div>
        <div class="stat-square">
            <div class="stat-number">55LPA</div>
            <div class="stat-text">Highest CTC by Morrison Corp.</div>
        </div>
        <div class="stat-square">
            <div class="stat-number">6.3LPA</div>
            <div class="stat-text">Overall <br> Average CTC</div>
        </div>
    </div>
    <div class="think-beyond-heading text-center">
        Think Beyond Innovation in a Research-Driven Environment
    </div>
    <div class="container text-center">
            <div class="stat-square">
                <div class="stat-number">650+</div>
                <div class="stat-text">Patents Published</div>
            </div>
            <div class="stat-square">
                <div class="stat-number">14</div>
                <div class="stat-text">Research Centres</div>
            </div>
            <div class="stat-square">
                <div class="stat-number">9000+</div>
                <div class="stat-text">Publications</div>
            </div>
            <div class="stat-square">
                <div class="stat-number" style="color: sky">74+</div>
                <div class="stat-text">Patents Granted</div>
            </div>
    </div>
    <div class="container awards-section">
        <h2 class="text-center" style="color: #0056b3;">Awards & Accolades</h2>
    </div>

    <div class="container text-center">
        <p style="color: grey; font-size: 18px;">
            The educational excellence of GLA University has been identified <br> by the most prestigious national bodies.
        </p>
    </div>
    <div class="ranked-section">
        <div class="ranked-item">
            <p class="ranked-text" style="margin-left: 25px">
                Ranked #1 in UP amongst <br> Best Private Universities in <br> 2020 by Dainik Jagaran
            </p>
        </div>

        <div class="ranked-item">
            <p class="ranked-text" style="margin-right: 25px">
                Ranked #2 in UP & #7 in India <br> amongst all private B-Schools <br> Ranking 2021 by TimesBschool
            </p>
        </div>
    </div>
        <!-- Footer Section -->
        <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- First Section: University Details -->
                <div class="col-md-4 footer-section">
                    <h5>GLA University</h5>
                    <p>
                        17km Stone, NH-19,<br>
                        Mathura-Delhi Road<br>
                        P.O. Chaumuhan,<br>
                        Mathura-281 406 (U.P.) India
                    </p>
                </div>
                <!-- Second Section: Contact Us -->
                <div class="col-md-4 footer-section">
                    <h5>Contact Us</h5>
                    <p>
                        +91-5662-250900,<br>
                        250909, 241489,<br>
                        +91-9927064017
                    </p>
                </div>
                <!-- Third Section: Email -->
                <div class="col-md-4 footer-section">
                    <h5>Email</h5>
                    <p>glauniversity@gla.ac.in</p>
                </div>
                <!-- Copyright Section -->
                <div class="row justify-content-center mt-4">
                    <div class="col text-center">
                        <p class="mb-0">
                            <span>&#169;</span> 2024 GLA University. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Including Bootstrap JS and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!-- Linking to external JavaScript -->
     <script src="script.js"></script>
</body>
</html>
