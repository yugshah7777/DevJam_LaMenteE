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

$alertType = "";
$alertMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $alertType = "danger";
        $alertMessage = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alertType = "warning";
        $alertMessage = "Invalid email format!";
    } else {
        $sql = "SELECT * FROM mentors WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['loggedin_mentor'] = true; 
                $_SESSION['user_id'] = $row['sno'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['email'] = $row['email'];
                session_write_close();

                $alertType = "success";
                $alertMessage = "Login Successful! Redirecting to dashboard...";
                echo "<script>setTimeout(function(){ window.location.href = 'mentordashboard.php'; }, 2000);</script>";
            } else {
                $alertType = "danger";
                $alertMessage = "Incorrect Password!";
            }
        } else {
            $alertType = "warning";
            $alertMessage = "No account found with this email!";
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
        <title>Login Page</title>
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
        <!-- <div class="loginImg">
            <img src="./logo2-removebg.png" alt="MenteE Logo" height="100vh"/>
            <img src="./logo2-name-removebg.png" alt="MenteE Name" height="30vh" style="margin-left: 1.5%;"/>
        </div> -->

        <!-- <div class="container-fluid login">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom shadow">
                <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./_temps/logo2-removebg.png" alt="MenteE Logo" height="40vh"/>
                <img src="./_temps/logo2-name-removebg.png" alt="MenteE" height="20vh" style="margin-left: 1.5vh;"/>
                </div>
        
                <ul class="nav nav-pills">
                <li class="nav-item"><a href="./index.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="./login.php" class="nav-link">Login</a></li>
                </ul>
            </header>
        </div> -->

        <div class="login-box">
            <form class="LoginForm" action="loginMentor.php" method="POST">
                <h1 class="h3 mb-3 fw-normal">Mentor's Sign In</h1>
                <?php if (!empty($alertMessage)) { ?>
                <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert">
                    <?php echo $alertMessage; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
            
                <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
            
                <div class="my-3">
                <a href="./mentorForgetPassword.php" style=" text-decoration: none;">Forget Password?</a>
                </div>
                <button class="btn w-100 py-2" type="submit" style="background-color: #7B89B1; color: white;">Sign in</button>
                <p style="margin-top: 0.5rem;">Do not have an account?   <a href="./signupMentor.php" style=" text-decoration: none;">Sign Up !!</a></p>
            </form>
        </div>  

        <div>
            <footer>
                <p>© MenteE</p>
            </footer>
        </div>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>
