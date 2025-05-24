<!-- about-us.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GLA University</title>
    <!-- Linking to Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Linking to external CSS -->
    <link href="aboutus.css" rel="stylesheet">
</head>
<body>

    <!-- Header (same as the home page) -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="d-flex align-items-center">
                    <img src="https://www.gla.ac.in/images/gla-university-logo.webp" alt="GLA University Logo 1" class="navbar-logo">
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <img src="https://www.gla.ac.in/images/naac-logo-1.webp" alt="NAAC Logo" class="navbar-logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="index.php">Home</a>
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

    <!-- About Us Content -->
    <div class="container" style="margin-top: 50px;">
        <h2 class="text-center">About GLA University</h2>
        <hr>
        <div class="row mt-5">
            <!-- Left Side: Image -->
            <div class="col-md-6 text-center">
                <img src="https://www.gla.ac.in/images/ganeshi-lal-agrawal.jpg" alt="Late Shri Ganeshi Lal Agrawal" class="img-fluid rounded" style="max-width: 80%; height: auto;">
                <p class="mt-3"><strong>Late Shri Ganeshi Lal Agrawal</strong></p>
            </div>

            <!-- Right Side: Text -->
            <div class="col-md-6">
                <p style="font-size: 18px; color: #333;">
                    It was the year 1991, when Shri Narayan Das Agrawal decided to fulfill the dream of his father, Late Shri Ganeshi Lal Agrawal, of establishing an institute for quality education for the people and the region & beyond. Our honorable Chancellor, Shri Narayan Das Agrawal established Sri Jagannath Prasad Ganeshi Lal Bajaj Charitable Trust Samiti in an attempt to make the holy city Mathura a recognized destination for knowledge seekers from different spheres of life and parts of the country. This paved the way for the establishment of a significant milestone at the karmabhoomi of the versatile and wise Lord Krishna.
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <img src="https://www.gla.ac.in/images/about-us.jpg" alt="GLA University About Us" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>

    <!-- Quality Policy Section -->
    <div class="section">
        <div class="container">
            <h3 class="section-heading">QUALITY POLICY</h3>
            <hr>
            <p class="section-content">
                To provide an empowering learning experience in established and emerging professions and capacity-building for leadership, entrepreneurship, and innovation.
            </p>
        </div>
    </div>

    <!-- Vision Section -->
    <div class="section">
        <div class="container">
            <h3 class="section-heading">VISION</h3>
            <hr>
            <p class="section-content">
                We envision ourselves as a pace-setting university of Academic Excellence focused on education, research, and development in established and emerging professions.
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="section">
        <div class="container">
            <h3 class="section-heading">MISSION</h3>
            <hr>
            <p class="section-content">
                To impart quality professional education, conduct commendable research, and provide credible consultancy and extension services per current and emerging socio-economic needs.
            </p>
            <p class="section-content">
                To continuously enhance and enrich the teaching/learning process and set such standards, education and otherwise, that other institutes would want to emulate.
            </p>
            <p class="section-content">
                To be student-centric, thus promoting the overall growth and development of intellect and personality of our prime stakeholders, namely students, so our alums are worthy citizens and highly sought-after professionals worldwide.
            </p>
            <p class="section-content">
                To empower faculty and staff members so that the university's ambiance is one of harmony, mutual respect, cooperative endeavor, and receptivity towards positive ideas.
            </p>
            <p class="section-content">
                To proactively seek regular feedback from all the stakeholders and take appropriate measures based on them, thus leading to an excellent learning process.
            </p>
        </div>
    </div>

    <!-- Footer (same as the home page) -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-section">
                    <h5>GLA University</h5>
                    <p>
                        17km Stone, NH-19,<br>
                        Mathura-Delhi Road<br>
                        P.O. Chaumuhan,<br>
                        Mathura-281 406 (U.P.) India
                    </p>
                </div>
                <div class="col-md-4 footer-section">
                    <h5>Contact Us</h5>
                    <p>
                        +91-5662-250900,<br>
                        250909, 241489,<br>
                        +91-9927064017
                    </p>
                </div>
                <div class="col-md-4 footer-section">
                    <h5>Email</h5>
                    <p>glauniversity@gla.ac.in</p>
                </div>
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

    <!-- Including Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
