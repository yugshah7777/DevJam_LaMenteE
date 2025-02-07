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

        <div class="container-fluid login">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom shadow">
                <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./logo2-removebg.png" alt="MenteE Logo" height="40vh"/>
                <img src="./logo2-name-removebg.png" alt="MenteE" height="20vh" style="margin-left: 1.5vh;"/>
                </div>
        
                <ul class="nav nav-pills">
                <li class="nav-item"><a href="./index.html" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="./login.html" class="nav-link">Login</a></li>
                </ul>
            </header>
        </div>

        <div class="login-box">
            <form class="LoginForm">
                <h1 class="h3 mb-3 fw-normal">Enter Details</h1>
            
                <div class="form-floating mb-2">
                    <input type="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Full Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <a href="./mentorResetPassword.php"><button class="btn w-100 py-2 mt-3" type="button" style="background-color: #7B89B1; color: white;">Send Link</button></a>
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