<?php



$allowed_ips = ['223.185.37.81']; // Replace with your IP address
$user_ip = $_SERVER['REMOTE_ADDR'];
if (!in_array($user_ip, $allowed_ips)) {
    echo 'Access denied: Unauthorized IP';
    exit();
}

include '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare('INSERT INTO adminUsers (first_name, last_name, email, phone, password) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('sssss', $first_name, $last_name, $email, $phone, $password);
    $stmt->execute();
    echo 'Registration successful';
    $stmt->close();
    $conn->close();
}
