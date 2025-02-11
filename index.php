<?php
// This is the main entry point for the Attendance Management website.

include 'src/attendance.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="src/assets/css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
    </header>
    <main>
        <h2>Welcome to the Attendance Management System</h2>
        <!-- Additional content goes here -->
    </main>
    <script src="src/assets/js/script.js"></script>
</body>
</html>