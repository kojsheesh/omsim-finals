<?php
session_start(); // THIS MUST BE AT THE TOP
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Sikatan Sikada Cafe</title>
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="https://media.discordapp.net/attachments/1496377481652076586/1497614928008450158/logo.jpg?ex=69ee2a17&is=69ecd897&hm=aaa80ee66571838b6d3b92bef5219aed8a871dac8bec03f94f49e1de8b497ab6&=&format=webp&width=703&height=703" alt="Logo">
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_email'])): ?>
                <a href="omsim.php">Reserve Now</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

<div class="feedback-container">
    <h2>Leave us a Review</h2>
    <p>We value your feedback to serve you better!</p>
    
    <form action="insert_feedback.php" method="POST">
        <div class="input-group">
            <label><i class="fa-solid fa-star"></i> Rating</label>
            <select name="rating" required>
                <option value="">Select a rating</option>
                <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
                <option value="4">⭐⭐⭐⭐ Good</option>
                <option value="3">⭐⭐⭐ Okay</option>
                <option value="2">⭐⭐ Poor</option>
                <option value="1">⭐ Bad</option>
            </select>
        </div>

        <div class="input-group">
            <label><i class="fa-solid fa-comment"></i> Your Comment</label>
            <textarea name="comment" rows="5" placeholder="Tell us about your experience..." required></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Feedback</button>
    </form>
</div>

</body>

</html>