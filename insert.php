<?php
session_start();
include "reservedb.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    // 1. Collect data from your omsim.php form
    $email = $_POST['email'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $event = $_POST['event'];
    $num = $_POST['num'];
    $item = $_POST['reserved_item'];

    // 2. Prepare the query using your exact column names
    $query = "INSERT INTO reservation (
                `Email Address`, 
                `Full Name`, 
                `Date of Reservation`, 
                `Time of Reservation`, 
                `Event Type`, 
                `Number of Packs`, 
                `Reserved Item`
              ) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssis", $email, $name, $date, $time, $event, $num, $item);

if ($stmt->execute()) {
    // THIS IS THE FIX: Capture the ID of the reservation just made
    $_SESSION['last_reservation_id'] = $conn->insert_id; 
    
    header("Location: cart.php");
    exit();
} else {
        echo "Error executing reservation: " . $conn->error;
    }
}
?>