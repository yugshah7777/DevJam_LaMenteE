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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $action = $_POST['action'];

    if ($action === "approve") {
        $sql = "UPDATE students SET status='active' WHERE sno=?";
    } elseif ($action === "reject") {
        $sql = "UPDATE students SET status='rejected' WHERE sno=?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    header("Location: manage_students.php");
    exit;
}

$students = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Manage Students</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($student = $students->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $student['first_name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo ucfirst($student['status']); ?></td>
                        <td>
                            <form method="POST" class="d-inline">
                                <input type="hidden" name="student_id" value="<?php echo $student['sno']; ?>">
                                <button type="submit" name="action" value="approve" class="btn btn-success">Approve</button>
                                <button type="submit" name="action" value="reject" class="btn btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
