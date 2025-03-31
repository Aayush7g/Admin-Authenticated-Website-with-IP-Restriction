<?php
// config.php - Database Connection

$host = "localhost";  // Usually "localhost" for Hostinger
$username = "";  // Replace with your actual username
$password = "";  // Replace with your actual password
$dbname = "";  // Your database name
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>