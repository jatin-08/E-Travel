<?php

include("../App\header.php");
include("../App/signin.php");

?>

<!-- SIGN IN PAGE -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gol SignUp Page</title>
</head>

<body class="bg-light">

    <!-- Sigin In Section -->

    <section class="container" style="min-height:100vh;">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-10"></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 pb-5 pt-3">
                <div class="card border-0 shadow-sm">
                    <div class="row gap-0">
                        <div class="col-md-6">
                            <img src="../Public/Assests\image\signin-image.jpg" class="img-fluid rounded-start h-100"
                                alt="image">
                        </div>
                        <div class="col-md-6 pt-3">
                            <h4 class="card-header border-0 bg-white text-center">Sign Up
                            </h4>
                            <div class="card-body">
                                <form action="#" autocomplete="off" method="post">

                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="abcd123@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="At least 6 characters">
                                    </div>
                                    <p class="card-text">Already have an account?<a
                                            href="http://localhost/E-Travel/App/login-UI.php"
                                            class="text-decoration-none">Sign in</a></p>
                                    <p class="card-text">By creating an account or logging in, you agree to E-Travel <a
                                            href="#" class="text-decoration-none">Conditions
                                            of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                    </p>
                                    <input type="submit" value="Sign Up" name="signup" class="btn signup-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 
                 -->
            </div>
        </div>
    </section>

</body>

</html>