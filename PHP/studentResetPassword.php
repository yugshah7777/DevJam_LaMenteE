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

$message = "";

if (!isset($_SESSION['reset_email'])) {
    die("Unauthorized access! Please request an OTP first.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["otp_submit"])) {
        $entered_otp = $_POST["otp"];
        $current_time = date("Y-m-d H:i:s");

        if (isset($_SESSION['otp']) && isset($_SESSION['otp_expiry']) && $_SESSION['otp_expiry'] > $current_time) {
            if ($entered_otp == $_SESSION['otp']) {
                $_SESSION['otp_verified'] = true;
                $message = "OTP verified successfully! Now set your new password.";
            } else {
                $message = "Invalid OTP. Please enter the correct OTP.";
            }
        } else {
            $message = "OTP expired. Please request a new OTP.";
            unset($_SESSION['otp'], $_SESSION['otp_expiry']);
        }
    }

    if (isset($_POST["password_submit"])) {
        if (!isset($_SESSION['otp_verified']) || $_SESSION['otp_verified'] !== true) {
            die("Unauthorized action! OTP verification required before resetting password.");
        }

        $new_password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $email = $_SESSION['reset_email'];

        if ($new_password !== $confirm_password) {
            $message = "Passwords do not match!";
        } else {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql = "UPDATE students SET password=?, resettoken=NULL, resettokenexpire=NULL WHERE email=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $hashed_password, $email);
            $stmt->execute();

            unset($_SESSION['otp'], $_SESSION['otp_expiry'], $_SESSION['reset_email'], $_SESSION['otp_verified']);

            $message = "Password reset successful! Redirecting to login...";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'loginStudent.php';
                    }, 2000);
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="style.css"
    />
</head>
<body>
<?php if (!empty($message)) echo "<div class='alert alert-info'>$message</div>"; ?>
    <div class="login-box container">

        <?php if (!isset($_SESSION['otp_verified']) || $_SESSION['otp_verified'] !== true) { ?>
            <form class="LoginForm" method="POST">
                <h2 class="h3 mb-3 fw-normal">Verify Your OTP</h2>                
                <div class="form-floating mb-3">
                <input type="password" name="otp" class="form-control" id="floatingPassword" placeholder="number">
                <label for="floatingPassword">Enter OTP</label>
                </div>
                <button type="submit" name="otp_submit" class="btn btn-success" style="background-color: #7B89B1; color: white;">Verify OTP</button>
            </form>
        <?php } ?>

        <?php if (isset($_SESSION['otp_verified']) && $_SESSION['otp_verified'] === true) { ?>
            <form class="LoginForm" method="POST">
                <h2 class="h3 mb-3 fw-normal">Reset Your Password</h2>
                <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">New Password</label>
                </div>
                <div class="form-floating mb-3">
                <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
                </div>
                <button type="submit" name="password_submit" class="btn btn-success" style="background-color: #7B89B1; color: white;">Reset Password</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>