<?php
include 'reservedb.php'; // Make sure this file has your $conn variable

// Capturing data from the form
$email   = $_POST['email'];
$name    = $_POST['name'];
$number  = $_POST['number']; // This matches <input name="number">
$date    = $_POST['date'];
$time    = $_POST['time'];
$event   = $_POST['event'];
$num     = $_POST['num'];

// SQL Query using the exact column names from your screenshot
$sql = "INSERT INTO reservation (`Email Address`, `Full Name`, `Contact Number`, `Date of Reservation`, `Time of Reservation`, `Event Type`, `Number of Packs`) 
        VALUES ('$email', '$name', '$number', '$date', '$time', '$event', '$num')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Reservation Successful!');
            window.location.href='index.php'; // Redirect back to home
          </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>