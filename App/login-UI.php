<?php

include("../App/header.php");
include("../App/login.php");

?>

<!-- Login Page -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gol Login Page</title>
</head>

<body class="bg-light">

    <section class="container" style="min-height:100vh;">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-10"></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 pb-5 pt-3">
                <div class="card border-0 shadow-sm">
                    <div class="row gap-0">
                        <div class="col-md-6">
                            <img src="../Public/Assests\image\signin-imagee1.jpg" class="img-fluid rounded-start h-100"
                                alt="image">
                        </div>
                        <div class="col-md-6 pt-3">
                            <h4 class="card-header border-0 bg-white text-center">Sign In
                            </h4>
                            <div class="card-body">
                                <form action="#" autocomplete="off" method="post">

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            id="exampleFormControlInput1" placeholder="abcd123@gmail.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleFormControlInput1" placeholder="At least 6 characters" required>
                                    </div>
                                    <p class="card-text">New User?<a href="../App\signin-UI.php"
                                            class="text-decoration-none">Sign Up</a></p>
                                    <p class="card-text">By creating an account or logging in, you agree to E-Travel <a
                                            href="#" class="text-decoration-none">Conditions
                                            of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                    </p>
                                    <input type="submit" value="Sign In" name="signin" class="btn login-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>