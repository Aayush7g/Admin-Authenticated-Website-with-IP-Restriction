<?php
session_start();
include '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM adminUsers WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header('Location: ../dashboard.php');  // Redirect to the PHP dashboard
        exit();
    } else {
        echo 'Invalid credentials';
    }

    $stmt->close();
    $conn->close();
}
?>
