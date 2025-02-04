<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$alertType = "";
$alertMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
        $alertType = "danger";
        $alertMessage = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alertType = "warning";
        $alertMessage = "Invalid email format!";
    } elseif ($password !== $confirm_password) {
        $alertType = "danger";
        $alertMessage = "Passwords do not match!";
    } else {
        $checkEmail = "SELECT email FROM mentors WHERE email='$email'";
        $result = $conn->query($checkEmail);

        if ($result->num_rows > 0) {
            $alertType = "warning";
            $alertMessage = "Email already registered! Please use another.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO mentors (first_name, last_name, email, password, dt) 
                    VALUES ('$first_name', '$last_name', '$email', '$hashed_password', current_timestamp())";

            if ($conn->query($sql) === TRUE) {
                $alertType = "success";
                $alertMessage = "Sign Up Successful! Redirecting to login...";
                echo "<script>setTimeout(function(){ window.location.href = 'loginMentor.php'; }, 2000);</script>";
            } else {
                $alertType = "danger";
                $alertMessage = "Error: " . $conn->error;
            }
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp Page</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="style.css"
        />
    </head>

    <body style="background-color: rgb(249, 247, 247);">
        <div class="container mt-4">
            <?php if (!empty($alertMessage)) { ?>
                <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert">
                    <?php echo $alertMessage; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>

        <div class="login-box">
            <form class="LoginForm" action="signupMentor.php" method="POST">
                <h1 class="h3 mb-3 fw-normal">Mentor's Sign Up</h1>
                <div class="form-floating mb-2">
                <input type="name" name="first_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">First Name</label>
                </div> 
                <div class="form-floating mb-2">
                <input type="name" name="last_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Last Name</label>
                </div>      
                <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
                </div>
            
                <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
                </div>
                <button class="btn w-100 py-2" type="submit" style="background-color: #7B89B1; color: white;">Sign Up</button>
                <p style="margin-top: 0.5rem;">Already Registered?   <a href="./loginMentor.php" style=" text-decoration: none;">Login</a></p>
            </form>
        </div>  
        
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>
