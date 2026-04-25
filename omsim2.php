
<?php
include "reservedb.php"; 

$result = mysqli_query($conn, "SELECT * FROM testtbl");
?>

<h2>Reservation List</h2>
<table border="1">
    <tr>
        <th>Email Address</th>
        <th>Full Name</th>
        <th>Contact Number</th>
        <th>Date</th>
        <th>Time</th>
        <th>Event Type</th>
        <th>Packs</th>
    </tr>

    <?php

    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row['Email Address']; ?></td>
        <td><?php echo $row['Full Name']; ?></td>
        <td><?php echo $row['Contact Number']; ?></td>
        <td><?php echo $row['Date of Reservation']; ?></td>
        <td><?php echo $row['Time of Reservation']; ?></td>
        <td><?php echo $row['Event Type']; ?></td>
        <td><?php echo $row['Number of Packs']; ?></td>
    </tr>
    <?php 
    } ?>
</table>