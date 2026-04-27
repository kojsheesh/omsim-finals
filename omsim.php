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
            <div class="field"><label>Contact Number</label><input type="text" name="number" required placeholder="Enter your Contact Number"></div>
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
            <button type="submit">Confirm Reservation</button>
            <button type="reset">Clear Form</button>

            <a href="index.php" class="btn-home">Go Back to Home</a>
        </form>

    </div>
    <!-- ACCOUNT ERASURE - Fixed bottom right -->
<div style="
    position: fixed;
    bottom: 28px;
    left: 28px;
    z-index: 9997;
">
    <button onclick="document.getElementById('deleteModal').style.display='flex'" style="
        background: rgba(255, 0, 0, 0.08);
        border: 1px solid rgba(255, 0, 0, 0.35);
        color: #ff6b6b;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        padding: 10px 18px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 7px;
        backdrop-filter: blur(8px);
        transition: 0.2s;
        letter-spacing: 0.3px;
    "
    onmouseover="this.style.background='rgba(255,0,0,0.18)';this.style.borderColor='#ff4444';this.style.color='#ff4444'"
    onmouseout="this.style.background='rgba(255,0,0,0.08)';this.style.borderColor='rgba(255,0,0,0.35)';this.style.color='#ff6b6b'">
        🗑️ Delete My Account
    </button>
</div>

<!-- CONFIRM DELETE MODAL -->
<div id="deleteModal" style="
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.75);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    padding: 20px;
">
    <div style="
        background: #1a1a1a;
        border: 1px solid rgba(255,0,0,0.3);
        border-radius: 16px;
        width: 100%;
        max-width: 400px;
        padding: 28px;
        text-align: center;
    ">
        <div style="font-size: 40px; margin-bottom: 12px;">⚠️</div>
        <h2 style="color: #ff4444; font-size: 18px; margin: 0 0 10px;">Are you sure?</h2>
        <p style="color: rgba(255,255,255,0.55); font-size: 13px; line-height: 1.6; margin: 0 0 24px;">
            This will <strong style="color:#fff;">permanently delete</strong> your account and all your reservation history. This action <strong style="color:#ff4444;">cannot be undone.</strong>
        </p>
        <div style="display: flex; gap: 10px;">
            <button onclick="document.getElementById('deleteModal').style.display='none'" style="
                flex: 1;
                padding: 11px;
                border-radius: 50px;
                border: 1px solid rgba(255,255,255,0.15);
                background: transparent;
                color: rgba(255,255,255,0.5);
                font-size: 13px;
                font-weight: 600;
                cursor: pointer;
            ">Cancel</button>

            <form action="delete_account.php" method="POST" style="flex: 2;">
                <button type="submit" style="
                    width: 100%;
                    padding: 11px;
                    border-radius: 50px;
                    border: none;
                    background: #ff4444;
                    color: #fff;
                    font-size: 13px;
                    font-weight: 700;
                    cursor: pointer;
                ">Yes, Delete My Account</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>