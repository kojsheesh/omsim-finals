<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// THE GUARD: If not logged in, kick them out to login.php
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="omsim.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Act form 1</title>
</head>

<body>

    <div class="container">

        <h1>Reservation</h1>

        <form action="insert.php" method="POST">
            <div class="field"><label>Email Address</label><input type="email" name="email" required placeholder="example@mail.com"></div>
            <div class="field"><label>Full Name</label><input type="text" name="name" required placeholder="Enter your full name"></div>

            <div class="field" style="width: 48%;"><label>Date</label><input type="date" name="date" required></div>
            <div class="field" style="width: 48%;"><label>Time</label><input type="time" name="time" required></div>

            <div class="field"><label>Event Type</label>
                <select name="event" required>
                    <option value="" disabled selected>Select an event</option>
                    <option value="bfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                    <option value="bday">Birthday</option>
                </select>
            </div>

            <div class="field"><label>Number of Packs (Guests)</label><input type="number" name="num" min="1" required></div>
            <div class="field">
                <label>Reserved Item</label>
                <input type="text" name="reserved_item"
                    value="<?php echo isset($_GET['item']) ? htmlspecialchars($_GET['item']) : ''; ?>"
                    readonly>
            </div>
            <button type="submit">Confirm Reservation</button>
            <button type="reset">Clear Form</button>

            <a href="index.php" class="btn-home">Go Back to Home</a>
        </form>

    </div>
</body>

</html>