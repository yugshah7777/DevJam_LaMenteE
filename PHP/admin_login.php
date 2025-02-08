<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = $_POST['role']; 

    if ($role === "admin") {
        $sql = "SELECT * FROM admin WHERE email=?";
    } elseif ($role === "mentor") {
        $sql = "SELECT * FROM mentors WHERE email=?";
    } else {
        $sql = "SELECT * FROM students WHERE email=?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $role;
        $_SESSION['first_name'] = $user['first_name'];

        if ($role === "admin") {
            header("Location: admin_dashboard.php");
        } elseif ($role === "mentor") {
            header("Location: mentordashboard.php");
        } else {
            header("Location: studentdashboard.php");
        }
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <form method="POST" action="admin_login.php">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="mentor">Mentor</option>
                    <option value="student">Student</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
