<?php
include 'connection.php';

if (isset($_POST['signup'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $confirm_password = $_POST['confirm_password'];

    // 1. reCAPTCHA Verification
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $secret_key = '6Le0DcssAAAAAPs9yTX94AMR1gomfLiBN-H8lTLc'; 
    $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$recaptcha_response";
    $response = json_decode(file_get_contents($verify_url), true);

    if (intval($response["success"]) !== 1) {
        echo "<script>alert('Please complete the reCAPTCHA.');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // 2. Check if email already exists
        $checkEmail = $mysqli->query("SELECT email FROM users WHERE email='$email'");
        
        if ($checkEmail->num_rows > 0) {
            echo "<script>alert('Email already registered. Try logging in.');</script>";
        } else {
            // 3. Insert new user
            $insert = $mysqli->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
            if ($insert) {
                echo "<script>alert('Registration Successful!'); window.location='login.php';</script>";
            } else {
                echo "<script>alert('Error: " . $mysqli->error . "');</script>";
            }
        }
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up - Sikada Cafe</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="logpage">
        <form method="POST" action="" autocomplete="off">
            <div class="pic"></div>
            <div class="logpage-text">
                <h2>CREATE ACCOUNT</h2>
                <table>
                    <tr><td>Full Name:</td></tr>
                    <tr><td><input type="text" name="name" placeholder="Juan Dela Cruz" required /></td></tr>
                    
                    <tr><td>Email:</td></tr>
                    <tr><td><input type="email" name="email" placeholder="example@gmail.com" required /></td></tr>
                    
                    <tr><td>Password:</td></tr>
                    <tr><td><input type="password" name="password" required /></td></tr>
                    
                    <tr><td>Confirm Password:</td></tr>
                    <tr><td><input type="password" name="confirm_password" required /></td></tr>
                    
                    <tr>
                        <td>
                            <div class="g-recaptcha" data-sitekey="6Le0DcssAAAAACPv1LdYyROfcxNimO0PaN-RXeiC"></div>
                            <input type="submit" name="signup" value="Register Now" />
                        </td>
                    </tr>
                    <tr>
                        <td>Already have an account? <a href="login.php" style="font-weight:bold;">Login</a></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>