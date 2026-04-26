<?php
$conn = new mysqli("localhost", "root", "", "it5_feedback");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$rating = $_POST['rating'];
$comment = $_POST['comment'];

$sql = "INSERT INTO feedbacks (rating, comments) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $rating, $comment);

if ($stmt->execute()) {
    echo "Feedback submitted successfully! <br>";
    echo "<a href='feedback.php'>Back</a>";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact.css">
    <title>Success - Sikatan Sikada</title>
    <style>
        .success-box {
            background: rgba(0, 0, 0, 0.85);
            padding: 50px;
            border-radius: 20px;
            border: 2px solid var(--mustard);
            text-align: center;
            margin-top: 100px;
            color: white;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background: var(--mustard);
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        h1 {
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

    </style>
</head>
<body>
    <div class="success-box">
        <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--mustard);"></i>
        <h1>Feedback Received!</h1>
        <p>Thank you for helping us improve Sikatan Sikada Cafe.</p>
        <a href="feedback.php" class="btn-back">Return</a>
    </div>
</body>
</html>