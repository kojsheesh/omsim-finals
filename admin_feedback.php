<?php
$conn = new mysqli("localhost", "root", "", "it5_feedback");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM feedbacks ORDER BY created_at DESC");
$avgResult = $conn->query("SELECT AVG(rating) as avg_rating FROM feedbacks");
$avgRow = $avgResult->fetch_assoc();
$average = round($avgRow['avg_rating'], 1); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sikatan Sikada</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="dashboard-wrapper">
        <nav class="sidebar">
            <div class="sidebar-logo">
                <h2>Admin<span>Panel</span></h2>
            </div>
            <ul class="nav-links">
                <li><a href="admin_feedback.php" class="active"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="admin_reservation.php"><i class="fa-solid fa-calendar-days"></i> Reservations</a></li>            
            </ul>
        </nav>

        <main class="content">
            <header class="top-header">
                <h1>Customer Feedback Management</h1>
                <div class="user-profile">
                    <span>Administrator</span>
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </header>

            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-star"></i></div>
                    <div class="stat-info">
                        <h3>Average Rating</h3>
                        <p><?php echo $average; ?> / 5.0</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-message"></i></div>
                    <div class="stat-info">
                        <h3>Total Reviews</h3>
                        <p><?php echo $result->num_rows; ?></p>
                    </div>
                </div>
            </div>

            <div class="table-card">
                <div class="card-header">
                    <h2>Recent Feedback List</h2>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Rating</th>
                                <th>Comment</th>
                                <th>Date Submitted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td>
                                    <span class="rating-badge">
                                        <?php echo $row['rating']; ?> <i class="fa-solid fa-star"></i>
                                    </span>
                                </td>
                                <td class="comment-text"><?php echo $row['comments']; ?></td>
                                <td class="date-text"><?php echo date('M d, Y | h:i A', strtotime($row['created_at'])); ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
<?php $conn->close(); ?>