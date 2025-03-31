<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally, you can also delete the session cookie to fully log the user out
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/'); // Expire the session cookie
}

// Redirect to the login page
header('Location: login.html');
exit();
