<?php
// Start session for CAPTCHA generation
session_start();

// Include database connection (assuming you've set up a database connection in db_connection.php)
include('db_connection.php');

// Initialize variables for form fields
$campus = $name = $email = $mobile = $course = $branch = $state = $city = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate CAPTCHA
    if ($_POST['captcha'] != $_SESSION['captcha_code']) {
        $captcha_error = "Invalid CAPTCHA!";
    } else {
        // Sanitize form data
        $campus = mysqli_real_escape_string($conn, $_POST['campus']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $branch = mysqli_real_escape_string($conn, $_POST['branch']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);

        // Insert data into the database
        $sql = "INSERT INTO admission_queries (campus, name, email, mobile, course, branch, state, city) 
                VALUES ('$campus', '$name', '$email', '$mobile', '$course', '$branch', '$state', '$city')";

        if (mysqli_query($conn, $sql)) {
            $success_message = "Your admission query has been submitted successfully!";
        } else {
            $error_message = "Error: " . mysqli_error($conn);
        }
    }
}

// Generate a new CAPTCHA code
$captcha_code = rand(1000, 9999);
$_SESSION['captcha_code'] = $captcha_code;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLA University - Admission Query</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <!-- Sticky Navbar (Same as Home Page) -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="d-flex align-items-center">
                    <img src="https://www.gla.ac.in/images/gla-university-logo.webp" alt="GLA University Logo" class="navbar-logo">
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <img src="https://www.gla.ac.in/images/naac-logo-1.webp" alt="NAAC Logo" class="navbar-logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link navbar-button" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link navbar-button" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link navbar-button" href="courses.php">Courses</a></li>
                    <li class="nav-item"><a class="nav-link navbar-button" href="tel:+919027068068"><span class="phone-icon">&#9742;</span> +91 9027068068</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Admission Query Form -->
    <div class="container mt-5">
        <h2>Admission Query Form</h2>

        <!-- Display success or error message -->
        <?php if (isset($success_message)) { echo "<div class='alert alert-success'>$success_message</div>"; } ?>
        <?php if (isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; } ?>
        <?php if (isset($captcha_error)) { echo "<div class='alert alert-danger'>$captcha_error</div>"; } ?>

        <!-- Form Starts Here -->
        <form action="admission_query.php" method="POST">
            <div class="form-group">
                <label for="campus">Select Campus</label>
                <select class="form-control" id="campus" name="campus" required>
                    <option value="Noida Campus">Noida Campus</option>
                    <option value="Mathura Campus">Mathura Campus</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" required>
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="captcha">Captcha: <?php echo $captcha_code; ?></label>
                <input type="text" class="form-control" id="captcha" name="captcha" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit Query</button>
        </form>
    </div>

    <!-- Footer Section (Same as Home Page) -->
    <footer class="footer mt-5">
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
