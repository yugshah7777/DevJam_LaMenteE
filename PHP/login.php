<?php
    session_start();
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
                <li class="nav-item"><a href="./index.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="./login.php" class="nav-link">Login</a></li>
                </ul>
            </header>
        </div>

        <div class="LOGIN">
            <div class="p-5 Mentor">
                <div class="container-fluid py-5">
                  <img src="./_temps/Mentor.png" alt="Mentor"/>
                  <h1 class="display-5 fw-bold">Mentor</h1>
                  <p class="col-md-8 mx-auto fs-4">We are here to teach our Juniors and help them through their college journey.</p>
                  <a href="./loginMentor.php"><button class="btn btn-outline-light btn-lg" type="button">Mentor Login</button></a>
                </div>
            </div>
            <div class="p-5 mb-4 bg-body-tertiary Student">
                <div class="container-fluid py-5">
                  <img src="./_temps/Student.png" alt="Student"/>
                  <h1 class="display-5 fw-bold">Student</h1>
                  <p class="col-md-8 mx-auto fs-4">We are here to Learn from Best Minds and get successful in our college Journey.</p>
                  <a href="./loginStudent.php"><button class="btn btn-outline-dark btn-lg" type="button">Student Login</button></a>
                </div>
            </div>
        </div>

        <!-- Footer -->
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
