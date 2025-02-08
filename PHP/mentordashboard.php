<?php
session_start();
$mentor_name = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : "Mentor";

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

if (!isset($_SESSION['loggedin_mentor']) || $_SESSION['loggedin_mentor'] != true) {
    header("location: loginMentor.php");
    exit;
}

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
                    <li class="nav-item"><a href="./mentorhome.php" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="./mentorProfile.php" class="nav-link">My Profile</a></li>
                </ul>
            </header>
        </div>

        <!-- Search Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light StudSearch" aria-label="Offcanvas navbar large">
            <div class="container-fluid">

            <!-- pppp -->
            <div class="typing-container">
    <span id="typing-text"></span>
</div>


              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Mentor_Name</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 searchStuMen">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Earnings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">My_Students</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Search By
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Student's Name</a></li>
                        <li><a class="dropdown-item" href="#">Student's Institute</a></li>
                        <li><a class="dropdown-item" href="#">Student's Branch</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex mt-3 mt-lg-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
        </nav>


        <!-- JavaScript -->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

<script>
    const text = "Hey," + "<?php echo $mentor_name; ?>"; // Get mentor_name from PHP

    let index = 0;
    let isDeleting = false;
    
    function typeEffect() {
        const element = document.getElementById("typing-text");

        if (!isDeleting) {
            element.textContent = text.substring(0, index + 1);
            index++;
            if (index === text.length) {
                isDeleting = true;
                setTimeout(typeEffect, 1000); // Pause before deleting
                return;
            }
        } else {
            element.textContent = text.substring(0, index - 1);
            index--;
            if (index === 0) {
                isDeleting = false;
            }
        }

        setTimeout(typeEffect, isDeleting ? 100 : 150); // Adjust speed
    }

    typeEffect();
</script>
    </body>
</html>