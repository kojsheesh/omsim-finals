<?php
include "reservedb.php";

if (isset($_GET['email'])) {
    $email = mysqli_real_escape_string($conn, $_GET['email']);

    $query = "DELETE FROM reservation WHERE `Email Address` = '$email'";
    mysqli_query($conn, $query);
}

header("Location: admin_reservation.php");
exit();
?>