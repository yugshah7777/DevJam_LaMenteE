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
        <form action="saveprofilestudent.php" method="POST">
            <div class="row">
                <div class="col-md-3 border-right text-center">
                    <div class="p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" " src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile Picture">
                        <span class="font-weight-bold d-block">Enter Your Name</span>
                        <input type="text" name="first_name" class="form-control mt-2" placeholder="First Name" required>
                        <input type="text" name="last_name" class="form-control mt-2" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <h4 class="text-right"><u>Profile</u></h4>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" name="mobile" class="form-control" placeholder="Enter phone number" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Email ID</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Address Line 1</label>
                                <input type="text" name="address1" class="form-control" placeholder="Enter address line 1" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Address Line 2</label>
                                <input type="text" name="address2" class="form-control" placeholder="Enter address line 2">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Pin Code</label>
                                <input type="text" name="pincode" class="form-control" placeholder="Enter pin code" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">State</label>
                                <input type="text" name="state" class="form-control" placeholder="Enter state" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Area</label>
                                <input type="text" name="area" class="form-control" placeholder="Enter area">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Region</label>
                                <input type="text" name="region" class="form-control" placeholder="Enter region">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="Enter country" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <h4><u>Education & Experience</u></h4>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Education</label>
                            <input type="text" name="education" class="form-control" placeholder="Enter education details">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Experience</label>
                            <input type="text" name="experience" class="form-control" placeholder="Enter experience details">
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>

        <!-- JavaScript -->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html> 
