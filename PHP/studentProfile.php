<?php
session_start();

if (!isset($_SESSION['user_data'])) {
    header("Location: studentProfileEdit.php");
    exit();
}

$user = $_SESSION['user_data'];
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
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
        <!-- NavBar -->
        <div class="container-fluid home">
            <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
                <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./_temps/logo2-removebg.png" alt="MenteE Logo" height="40vh"/>
                <img src="./_temps/logo2-name-removebg.png" alt="MenteE" height="20vh" style="margin-left: 1.5vh;"/>
                </div>
        
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="./studentdashboard.php" class="nav-link" aria-current="page">Dashboard</a></li>
                    <li class="nav-item"><a href="./logout.php" class="nav-link">Log Out</a></li>
                </ul>
            </header>
        </div>

        <!-- Profile -->
        <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right text-center">
                <div class="p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile Picture">
                    <h4 class="mt-3"><?php echo htmlspecialchars($user['first_name'] . " " . $user['last_name']); ?></h4>
                    <p class="text-black-50"><?php echo htmlspecialchars($user['email']); ?></p>
                </div>
            </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <h4 class="text-right"><u>Profile Details</u></h4>
                    <div class="row mt-3">
                        <div class="col-md-12"><strong>Mobile Number:</strong> <?php echo htmlspecialchars($user['mobile']); ?></div>
                        <div class="col-md-12 mt-3"><strong>Address Line 1:</strong> <?php echo htmlspecialchars($user['address1']); ?></div>
                        <div class="col-md-12 mt-3"><strong>Address Line 2:</strong> <?php echo htmlspecialchars($user['address2']); ?></div>
                        <div class="col-md-12 mt-3"><strong>Pin Code:</strong> <?php echo htmlspecialchars($user['pincode']); ?></div>
                        <div class="col-md-12 mt-3"><strong>State:</strong> <?php echo htmlspecialchars($user['state']); ?></div>
                        <div class="col-md-12 mt-3"><strong>Area:</strong> <?php echo htmlspecialchars($user['area']); ?></div>
                        <div class="col-md-12 mt-3"><strong>Region:</strong> <?php echo htmlspecialchars($user['region']); ?></div>
                        <div class="col-md-12 mt-3"><strong>Country:</strong> <?php echo htmlspecialchars($user['country']); ?></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 py-5">
                    <h4><u>Education & Experience</u></h4>
                    <div class="col-md-12 mt-3"><strong>Education:</strong> <?php echo htmlspecialchars($user['education']); ?></div>
                    <div class="col-md-12 mt-3"><strong>Experience:</strong> <?php echo htmlspecialchars($user['experience']); ?></div>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>
