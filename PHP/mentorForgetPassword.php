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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
    } else {
        $sql = "SELECT * FROM mentors WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $mentor = $result->fetch_assoc();

        if ($mentor) {
            if (isset($_SESSION['otp']) && $_SESSION['otp_expiry'] > date("Y-m-d H:i:s")) {
                $otp = $_SESSION['otp'];
            } else {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['otp_expiry'] = date("Y-m-d H:i:s", strtotime("+10 minutes"));
                $_SESSION['reset_email'] = $email;
            }

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'lamentee.work@gmail.com';
                $mail->Password = 'rlakqlslhrgcdgwr';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('lamentee.work@gmail.com', 'MenteE Admin');
                $mail->addAddress($email);
                $mail->Subject = "Password Reset OTP";
                $mail->Body = "Your OTP for password reset is: $otp\nThis OTP is valid for 10 minutes.";

                $mail->send();
                header("Location: mentorResetPassword.php");
                exit();
            } catch (Exception $e) {
                $message = "Email could not be sent. Error: " . $mail->ErrorInfo;
            }
        } else {
            $message = "No account found with this email.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
        <form class="LoginForm" method="POST">
        <h2 class="h3 mb-4 fw-normal">Enter Details</h2>
        <div class="form-floating mb-4">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" >
                <label for="floatingInput">Email Address</label>
            </div>
            <button type="submit" class="btn" style="background-color: #7B89B1; color: white;">Send OTP</button>
        </form>
    </div>
</body>
</html>