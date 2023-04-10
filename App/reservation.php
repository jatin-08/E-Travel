<?php

require_once('header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-light">

    <!-- Header Section Start -->
    <section class="container-fluid bg-image">
        <img src="../Public/Assests/image/airplane.jpg" class="image-fluid" alt="image">
    </section>
    <!-- Header Section End -->

    <!-- Main Section Start -->

    <section class="container-fluid my-5">
        <div class="conatiner">
            <div class="row px-5">
                <ul class="list-unstyled d-flex">
                    <li class="box">
                        <a href="#" class="text-decoration-none shadow-sm">All Offers</a>
                    </li>
                    <li class="box">
                        <a href="#" class="text-decoration-none shadow-sm"><i class="fa-solid fa-plane-departure px-2"></i>Flight</a>
                    </li>
                    <li class="box">
                        <a href="#" class="text-decoration-none shadow-sm"><i class="fa-solid fa-train px-2"></i>Railway</a>
                    </li>
                    <li class="box">
                        <a href="#" class="text-decoration-none shadow-sm"><i class="fa-solid fa-bus px-2"></i>Bus</a>
                    </li>
                </ul>
            </div>
            <div class="row p-5">
                <div class="card" style="width: 25rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <strong class="card-title fs-5">Grab Now: Flat 12% OFF* on Domestic Flight</strong>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">Book Now</a>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Section End -->


<?php

require_once("../App/footer.php");

?>

</body>

</html>