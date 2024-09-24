<?php
session_start(); // Start the session if not already started

// Ensure the user is authenticated
if (!isset($_SESSION['Userid']) || !is_numeric($_SESSION['Userid'])) {
    header('Location: login.php');
    exit();
}

$userId = (int)$_SESSION['Userid'];

include('database/connection.php'); // Adjust the path as needed

try {
    // Prepare and execute a SQL query to fetch the required data from the prerequisites table
    $query = "
        SELECT subjectid, subjectName, prerequisite, year
        FROM prerequisites
    ";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Fetch all results as an associative array
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log('Database query failed: ' . $e->getMessage(), 3, 'logs/errors.log'); // Adjust path as needed
    echo '<p>An error occurred while fetching course data. Please try again later.</p>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link rel="stylesheet" href="css/sidebar.css"> <!-- Adjust path if necessary -->
    <style>
        /* Additional styling for the table */
        .table-container {
            margin-left: 250px; /* Adjust according to your sidebar width */
            padding: 20px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #7869B5;
            color: white;
        }
        h1 {
            color: #7869B5;; /* Change this color as needed */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <!-- Sidebar content -->
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="enrol.php">Enroll in Course</a></li>
            <li><a href="enrolled-courses.php">Enrolled Courses</a></li>
            <li><a href="edit-profile.php">Edit Profile</a></li>
            <li><a href="prerequisites.php">Prerequisites</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="table-container">
        <h1>Prerequisites</h1>
        <table>
            <thead>
                <tr>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Prerequisite</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through each course and display it in the table
                foreach ($courses as $course) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($course['subjectid'], ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "<td>" . htmlspecialchars($course['subjectName'], ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "<td>" . htmlspecialchars($course['prerequisite'], ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "<td>" . htmlspecialchars($course['year'], ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>