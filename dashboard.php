<?php
session_start();

// Ensure user is authenticated
if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit();
}

// User ID from session
$userID = $_SESSION['user'];

// Sanitize the user ID (for security purposes)
$userID = htmlspecialchars($userID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link to external CSS or Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .dashboard-header h1 {
            font-size: 2.5rem;
            color: #343a40;
        }
        .dashboard-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .btn-logout {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 20px;
        }
        .btn-logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <h1>Welcome to Admin Dashboard</h1>
            <p>Logged in as User ID: <?php echo $userID; ?></p>
        </div>

        <div class="text-center">
            <a href="actions/logout.php" class="btn-logout">Logout</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
