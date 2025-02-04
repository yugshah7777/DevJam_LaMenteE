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
        <div class="login-box">
            <form class="LoginForm">
                <h1 class="h3 mb-3 fw-normal">Student's Sign Up</h1>
                <div class="form-floating mb-2">
                <input type="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">First Name</label>
                </div> 
                <div class="form-floating mb-2">
                <input type="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Last Name</label>
                </div>             
                <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
                </div>
            
                <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
                </div>
                <a href="./loginStudent.php"><button class="btn w-100 py-2" type="button" style="background-color: #7B89B1; color: white;">Sign Up</button></a>
                <p style="margin-top: 0.5rem;">Already Registered?   <a href="./loginStudent.php" style=" text-decoration: none;">Login...</a></p>
            </form>
        </div>  
        
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>
