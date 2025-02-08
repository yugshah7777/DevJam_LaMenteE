<?php
session_start();
if (!isset($_SESSION['admin_loggedin']) || $_SESSION['admin_loggedin'] !== true) {
    header("Location: admin_auth.php");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mentors_count = $conn->query("SELECT COUNT(*) AS count FROM mentors")->fetch_assoc()['count'];
$students_count = $conn->query("SELECT COUNT(*) AS count FROM students")->fetch_assoc()['count'];
$pending_mentors = $conn->query("SELECT COUNT(*) AS count FROM mentors WHERE status='pending'")->fetch_assoc()['count'];
$pending_students = $conn->query("SELECT COUNT(*) AS count FROM students WHERE status='pending'")->fetch_assoc()['count'];

$total_pending = $pending_mentors + $pending_students;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div class="text-white" style="background-color:#0d0550" id="sidebar">
            <h3 class="text-center py-3">Admin Panel</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color:#0d0550"><a href="admin_dashboard.php" class="text-white">Dashboard</a></li>
                <li class="list-group-item" style="background-color:#0d0550"><a href="manage_mentors.php" class="text-white">Manage Mentors</a></li>
                <li class="list-group-item" style="background-color:#0d0550"><a href="manage_students.php" class="text-white">Manage Students</a></li>
                <li class="list-group-item" style="background-color:#0d0550"><a href="view_feedback.php" class="text-white">View Feedback</a></li>
                <li class="list-group-item" style="background-color:#0d0550"><a href="admin_logout.php" class="text-white">Logout</a></li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" style="background-color:#0d0550" id="menu-toggle">☰</button>
                <div class="ms-auto pe-3">Welcome, Admin</div>
            </nav>

            <div class="container-fluid p-4">
                <h2>Dashboard Overview</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Total Mentors</div>
                            <div class="card-body">
                                <h4><?php echo $mentors_count; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Total Students</div>
                            <div class="card-body">
                                <h4><?php echo $students_count; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-header">Pending Approvals</div>
                            <div class="card-body">
                                <h4><?php echo $total_pending; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function () {
            document.getElementById("wrapper").classList.toggle("toggled");
        });
    </script>
</body>
</html>
