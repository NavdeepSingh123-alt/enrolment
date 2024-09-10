<?php
session_start();

if (isset($_POST['logout'])) {
    // Destroy the session and redirect to login page
    session_destroy();
    header('Location: login.php');
    exit();
}

if (isset($_POST['stay'])) {
    // Redirect back to the previous page
    if (isset($_SESSION['previous_page'])) {
        header('Location: ' . $_SESSION['previous_page']);
    } else {
        header('Location: dashboard.php'); // Fallback to dashboard if previous page is not set
    }
    exit();
}

// Store the previous page URL in a session variable
if (!isset($_SESSION['previous_page'])) {
    $_SESSION['previous_page'] = $_SERVER['HTTP_REFERER'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        /* Add your CSS styling here to match the design of your other pages */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .yes {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .no {
            background-color: #f44336;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Are you sure you want to logout?</h2>
        <form method="POST" action="">
            <button type="submit" name="logout" class="yes">Yes</button>
            <button type="submit" name="stay" class="no">No</button>
        </form>
    </div>
</body>
</html>