<?php
  // It's usually better to store the message in a variable 
  // so you can place it exactly where you want it in the design.
  $message = "Successfully logged in!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="icon">✔</div>
            <h1>Welcome</h1>
            <h1>Tuloy po Kayo!</h1>
            <p><?php echo $message; ?></p>
            <a href="menu.php" class="btn">Go to Menu</a>
        </div>
    </div>
</body>
</html>