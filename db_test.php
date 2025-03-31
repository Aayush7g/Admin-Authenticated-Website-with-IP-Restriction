<?php
// Database connection test script
$host = "localhost";  // Usually "localhost" for Hostinger
$username = "u608550588_rosybrownelan";  // Replace with your actual username
$password = "Comp@l1w3";  // Replace with your actual password
$dbname = "u608550588_webform";  // Your database name

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully to the database!";
}

// Close connection
$conn->close();
?>
