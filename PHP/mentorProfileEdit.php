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
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="First name" value=""></div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="Surname"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter Phone Number" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="Enter Address line 1" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">PinCode</label><input type="text" class="form-control" placeholder="Enter Address line 1" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">State</label><input type="text" class="form-control" placeholder="Enter Address line 1" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Area</label><input type="text" class="form-control" placeholder="Enter Address line 1" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="Enter Address line 2" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="Enter Email id" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Education</label><input type="text" class="form-control" placeholder="Education" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="State"></div>
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="Country" value=""></div>
                        </div>
                        <div class="mt-5 text-center"><a href="./mentorProfile.php"><button class="btn btn-primary profile-button" type="button">Save Profile</button></a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span><u><h4>Experience</h4></u></span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
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
