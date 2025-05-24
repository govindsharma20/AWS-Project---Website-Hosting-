<?php
$servername = "localhost";
$username = "root";   // default username for MySQL
$password = "";       // default password for MySQL (empty)
$dbname = "university_db";  // name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
