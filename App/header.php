<?php

include("../App\links.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOL - Travel Where You Want In The Whole World.</title>
</head>

<body>

    <!-- HEADER SECTION -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-item-center logoIcon" href="http://localhost/E-Travel/Public/index.php">
                <span class="rounded-circle text-center text-white fw-bold">E</span>
                <span class="poppins px-2 fw-bold mt-2">Travel</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item open-sans">
                        <a class="nav-link text-dark" aria-current="page"
                            href="http://localhost/E-Travel/Public/index.php">Home</a>
                    </li>
                    <li class="nav-item open-sans">
                        <a class="nav-link text-dark" href="../App\reservation.php">Find Reservation</a>
                    </li>
                    <li class="nav-item open-sans">
                        <a class="nav-link text-dark" href="#">Explore</a>
                    </li>
                    <li class="nav-item open-sans">
                        <a class="nav-link text-dark" href="#">Gallery</a>
                    </li>
                    <li class="nav-item open-sans">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                    <li class="nav-item open-sans">
                        <a class="nav-link text-dark" href="#">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item open-sans">
                        <a class="nav-link text-center signin-btn ubuntu text-white"
                            href="http://localhost/E-Travel/App/login-UI.php">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>