<?php
include 'connection.php';

// Guard: must be logged in
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_SESSION['user_email']);

    // Delete user's reservations first (if you have a reservations table)
    $mysqli->query("DELETE FROM reservations WHERE email = '$email'");

    // Delete the user account
    $mysqli->query("DELETE FROM users WHERE email = '$email'");

    // Destroy the session
    session_unset();
    session_destroy();

    // Redirect to home with a message
    header("Location: index.php?deleted=1");
    exit();
}
?>