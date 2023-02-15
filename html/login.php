<?php
include("../html/header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gol Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="../Assests/Image/Prime Cl@ssess-main Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/header.css">
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
                            <img src="../Assests\image\signin-imagee1.jpg" class="img-fluid rounded-start h-100"
                                alt="image">
                        </div>
                        <div class="col-md-6 pt-3">
                            <h4 class="card-header border-0 bg-white text-center">Sign In
                            </h4>
                            <div class="card-body">
                                <form action="#" autocomplete="off" method="post">

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="eamil" class="form-control"
                                            id="exampleFormControlInput1" placeholder="abcd123@gmail.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleFormControlInput1" placeholder="At least 6 characters" required>
                                    </div>
                                    <p class="card-text">New User?<a href="../php\signin.php"
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