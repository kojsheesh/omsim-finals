<?php
// This is the "magic" line that connects the library you just installed
require_once 'vendor/autoload.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuration (Use the ID from your previous screenshot)
$clientID = '919921853456-6jrp4gsd96qva9a3n97v9dit2nl9oeae.apps.googleusercontent.com';
$clientSecret = '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'; // Find this in your Google Console
$redirectUri = 'http://localhost/omsim-finals/login.php';

// Initialize the Google Client
$client = new \Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// user log in
$conn = mysqli_connect("localhost", "root", "", "it5_login");
$host = "Localhost";
$user = "root";
$password = "";
$db_name = "it5_login";

$mysqli = new mysqli ($host, $user, $password, $db_name);
if ($mysqli->connect_error) {
	die("Connection failed:".$mysqli->connect_error);
}


?>