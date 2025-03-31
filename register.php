<?php
session_start();

// IP Restriction
$allowed_ips = ['223.185.37.81'];  // Replace with your IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

if (!in_array($user_ip, $allowed_ips)) {
    header('Location: login.php');  // Redirect unauthorized IPs
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 400px; margin: 0 auto; }
        input, button { display: block; width: 100%; margin: 10px 0; padding: 10px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background: #45a049; }
        a { display: block; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
<h2>Register</h2>
<form action='actions/register.php' method='POST'>
    <input type='text' name='first_name' placeholder='First Name' required>
    <input type='text' name='last_name' placeholder='Last Name' required>
    <input type='email' name='email' placeholder='Email' required>
    <input type='text' name='phone' placeholder='Phone Number' required>
    <input type='password' name='password' placeholder='Password' required>
    <button type='submit'>Register</button>
</form>
<a href='login.php'>Already have an account? Login</a>
</body>
</html>
