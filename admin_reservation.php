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
                <li><a href="admin_feedback.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="admin_reservation.php" class="active"><i class="fa-solid fa-calendar-days"></i> Reservations</a></li>            
            </ul>
        </nav>

        <main class="content">
            <div class="content-header">
                <h1>Reservation Management</h1>
                <div class="user-info">
                    <span>Administrator <i class="fa-solid fa-circle-user"></i></span>
                </div>
            </div>

            <?php
            include "reservedb.php"; 

            $search = "";
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = mysqli_real_escape_string($conn, $_GET['search']);
                $query = "SELECT * FROM reservation WHERE 
                          `Full Name` LIKE '%$search%' OR 
                          `Email Address` LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM reservation";
            }
            $result = mysqli_query($conn, $query);
            ?>

            <div class="card search-card">
                <form method="GET" action="admin_reservation.php" class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" placeholder="Search by name or email..." 
                               value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                        <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                        <a href="admin_reservation.phpomsim2.php" class="btn-reset">Reset</a>
                    </div>
                </form>
            </div>

            <div class="card table-card">
                <div class="card-header">
                    <h2><i class="fa-solid fa-list"></i> Recent Reservations</h2>
                </div>
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Email Address</th>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Event Type</th>
                                <th>Packs</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['Email Address']); ?></td>
                                <td><?php echo htmlspecialchars($row['Full Name']); ?></td>
                                <td><?php echo htmlspecialchars($row['Contact Number']); ?></td>
                                <td><?php echo htmlspecialchars($row['Date of Reservation']); ?></td>
                                <td><?php echo htmlspecialchars($row['Time of Reservation']); ?></td>
                                <td><span class="badge"><?php echo htmlspecialchars($row['Event Type']); ?></span></td>
                                <td><?php echo htmlspecialchars($row['Number of Packs']); ?></td>
                                <td>
                                    <a href="delete_reservation.php?email=<?php echo urlencode($row['Email Address']); ?>" 
                                       class="btn-delete"
                                       onclick="return confirm('Are you sure you want to delete this reservation?')">
                                       <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
<?php $conn->close(); ?>