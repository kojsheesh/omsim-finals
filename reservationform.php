<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// THE GUARD: If not logged in, kick them out to login.php
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
</head>
<body>
    <h1>Reservation Form</h1>
 
</body>
</html>