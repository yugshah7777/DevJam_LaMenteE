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

$feedbacks = $conn->query("SELECT * FROM feedback ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>User Feedback</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User Type</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($feedback = $feedbacks->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo ucfirst($feedback['user_type']); ?></td>
                        <td><?php echo $feedback['message']; ?></td>
                        <td><?php echo $feedback['created_at']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
