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
                    <li class="nav-item"><a href="./mentordashboard.php" class="nav-link" aria-current="page">Dashboard</a></li>
                    <li class="nav-item"><a href="./logout.php" class="nav-link">Log Out</a></li>
                </ul>
            </header>
        </div>

        <!-- Profile -->
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Name</span><span class="text-black-50">email@gmail.com</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <u><h4 class="text-right">Profile</h4></u>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">Address Line 1</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">PinCode</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">State</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">Area</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">Address Line 2</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">Email ID</label></div>
                            <div class="col-md-12 mt-3"><label class="labels">Education</label></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">State/Region</label></div>
                            <div class="col-md-6"><label class="labels">Country</label></div>
                        </div>
                        <div class="mt-5 text-center"><a href="./mentorProfileEdit.php"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span><u><h4>Experience</h4></u></div><br>
                        <div class="col-md-12"><label class="labels">Experience</label></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label></div>
                    </div>
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