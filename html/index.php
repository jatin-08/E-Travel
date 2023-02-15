<?php
include('../html\header.php');

?>


<!-- HOME PAGE -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOL - Travel Where You Want In The Whole World.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="../Assests\image\gol-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <!-- <link rel="stylesheet" href="../css/responsive.css"> -->
</head>

<body class="bg-light">

    <!-- header background image -->

    <section class="container-fluid header-bg-image bg-light py-2">
        <div class="row px-5 py-2">
            <div class="col-lg-6 col-12 pt-4">
                <div class="card border-0" style="width: 100%; background: none;">
                    <div class="card-body">
                        <h1 class="card-title fw-600 ubuntu py-3">Find Your Next Travel Destination:<br>Book with
                            Confidence
                        </h1>
                        <a href="#" class="card-link header-bg-btn fw-bold poppins">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-last order-first col-12">
                <img src="../Assests\image\image 1.jpg" class="w-100" alt="image">
            </div>
        </div>
    </section>

    <!-- Input flight SECTION -->


    <section class="container-fluid py-4">
        <form class="container shadow bg-white">
            <h5 class="open-sans fw-bold p-4">Where are you flying?</h5>
            <div class="row gap-4 px-2">
                <div class="col d-flex position-relative border input-box">
                    <label for="" class="position-absolute bg-white">From - To</label>
                    <input type="text" class="form-control bg-transparent my-2 shadow-none border-0"
                        placeholder="Location">
                </div>
                <div class="col d-flex position-relative border input-box">
                    <label for="" class="position-absolute bg-white">Depart</label>
                    <input type="date" class="form-control bg-transparent shadow-none border-0" placeholder="Depart">
                </div>

                <div class="col d-flex position-relative border input-box">
                    <label for="" class="position-absolute bg-white">Return
                    </label>
                    <input type="date" class="form-control bg-transparent shadow-none border-0" placeholder="Return">
                </div>
                <div class="col d-flex position-relative border input-box">
                    <label for="" class="position-absolute bg-white">Passenger</label>
                    <input type="text" class="form-control bg-transparent shadow-none border-0" placeholder="Seat">
                </div>
            </div>
            <div class="col my-3 d-flex main gap-4">
                <button class="btn-add"><i class="fa-solid fa-plus px-2"></i>Add Promo Code</button>
                <button class="btn-flight"><i class="fa-brands fa-telegram px-2 text-white fs-4"></i>Show
                    flight</button>
            </div>
        </form>
    </section>

    <!-- PACKAGES SECTION -->



    <!-- ISLAND SECTION -->

    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center poppins fw-bold py-3">Island Stays</h1>
                    <p class="poppins w-50 m-auto fs-6 text-center pb-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, vitae facilis. Quaerat dolore
                    </p>
                </div>
            </div>
            <div class="island">
                <div class="island-box rounded card border-0 shadow">
                    <div class="image-box rounded">
                        <img src="../Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none text-white">Explore More</a>
                    </div>
                </div>
                <div class="island-box rounded card border-0 shadow">
                    <div class="image-box rounded">
                        <img src="../Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none text-white">Explore More</a>
                    </div>
                </div>
                <div class="island-box rounded card border-0 shadow">
                    <div class="image-box rounded">
                        <img src="../Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none text-white">Explore More</a>
                    </div>
                </div>
                <div class="island-box rounded card border-0 shadow">
                    <div class="image-box rounded">
                        <img src="../Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none text-white">Explore More</a>
                    </div>
                </div>
                <div class="island-box rounded card border-0 shadow">
                    <div class="image-box rounded">
                        <img src="../Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none text-white">Explore More</a>
                    </div>
                </div>
                <div class="island-box rounded card border-0 shadow">
                    <div class="image-box rounded">
                        <img src="../Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none text-white">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <!-- <section class="container mt-5">
        <div class="row contact poppins">
            <div class="col-md-5">
                <h3 class="m-5">Let’s Ready to Explore The
                    World With Us.</h3>
                <p class="m-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque efficitur ac quam in congue. </p>
            </div>
            <div class="col-md-4">
                <img src="../Assests\image\map.png" alt="map" class="map-image">
            </div>
            <div class="col-md-3 d-flex">
                <button class="btn btn-contact fw-bold">Contact Us</button>
            </div>
        </div>
    </section> -->

    <!-- CLIENT SECTION -->

    <!-- last main SECTION -->

    <!-- <section class="container-fluid last-main px-5 mt-5">
        <div class="col-md-3 last-main-content">
            <img src="../Assests\image\gol-logo-white 1.png" alt="image">
            <p class="poppins mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla minus facilis
                omnis similique aspernatur
                minima labore eveniet, repellat veritatis reiciendis!</p>
        </div>
        <div class="col-md-3 last-main-content">
            <h5>Company</h5>
            <ul class="list-unstyled">
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Event</a></li>
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Blogs</a></li>
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>FAQ</a></li>
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Join Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 last-main-content">
            <h5>About Us</h5>
            <ul class="list-unstyled">
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Project</a></li>
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Lorem</a></li>
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Service</a></li>
                <li><a href="#"><i class="fa-solid fa-angle-right"></i>Our Story</a></li>
            </ul>
        </div>
        <div class="col-md-3 last-main-content">
            <h5>Contact Us</h5>
            <ul class="list-unstyled">
                <li><a href="#">abcdef@gmail.com</a></li>
                <li><a href="#">India</a></li>
            </ul>
        </div>
    </section> -->


    <!-- footer section -->

    <!-- <footer class="container-fluid footer">
        <span
            class="text-light px-5">_______________________________________________________________________________________________________________________________________________________________</span>
        <div class="footer-content">
            <p class="fs-6 text-light mb-0 text-center">Copyright © 2023 GoL Travels Private Limited. All Rights
                Reserved.</p>
            <div class="footer-content-icon">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>

    </footer> -->


    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="../javascript\index.js"></script>
</body>

</html>