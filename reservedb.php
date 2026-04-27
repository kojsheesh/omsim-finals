
<?php

$conn = mysqli_connect("localhost", "root", "", "it5_reservations");

if(!$conn)
{

    die("Connection Failed: " .mysqli_connect_error());

}


?>