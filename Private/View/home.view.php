<!-- HOME PAGE -->


<?php

$this->view("includes/header"); // All the link are present in the header.
$this->view("includes/navBar"); // The header or navbar related information is present in the navBar.

?>

<!-- header background image section start -->

<section class="container-fluid header-bg-image bg-light py-2">
    <div class="row px-5 py-2">
        <div class="col-lg-6 col-12 pt-4">
            <div class="card border-0" style="width: 100%; background: none;">
                <div class="card-body">
                    <h1 class="card-title fw-600 ubuntu py-3">Find Your Next Travel Destination:<br>Book with
                        Confidence
                    </h1>
                    <a href="#" class="card-link header-bg-btn fw-bold hover poppins">Explore More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-lg-last order-first col-12">
            <img src="Assests\image\image 1.jpg" class="w-100" alt="image">
        </div>
    </div>
</section>

<!-- header background image section end -->



<!-- Input flight SECTION start -->


<section class="container-fluid py-4">
    <form class="container shadow bg-white">
        <h5 class="open-sans fw-bold p-4">Where are you flying?</h5>
        <div class="row gap-4 px-2">
            <div class="col d-flex position-relative border input-box">
                <label for="" class="position-absolute bg-white">From - To</label>
                <input type="text" class="form-control bg-transparent my-2 shadow-none border-0" placeholder="Location">
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
            <button class="btn-flight hover"><i class="fa-brands fa-telegram px-2 fs-4"></i>Show
                flight</button>
        </div>
    </form>
</section>


<!-- Input flight section end -->



<!-- PACKAGES SECTION Start -->

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center poppins fw-bold py-3">Best Packages For You</h1>
                <p class="poppins w-50 m-auto fs-6 text-center pb-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, vitae facilis. Quaerat dolore
                </p>
            </div>
        </div>
        <div class="row owl-carousel owl-theme pt-5">
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="item island-box rounded card border">
                <div class="">
                    <div class="image-box rounded">
                        <img src="Assests\image\photo1.png" class="rounded-top img-fluid" alt="image">
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-item-center justify-content-between">
                            <h1 class="fw-bold fs-5">Goa</h1>
                            <span>4.5</span>
                        </div>
                    </div>
                    <p class="poppins card-text px-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Commodi,
                        eius.</p>
                    <div class="explore-btn d-flex justify-content-center mb-3">
                        <a href="#" class="text-decoration-none hover">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Package Section End -->




<!-- ISLAND SECTION Start -->

<section class="container-fluid mt-5 pt-5">
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
                    <img src="Assests\image\images (17) 1 3.png" class="rounded-top img-fluid" alt="image">
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
                    <a href="#" class="text-decoration-none hover">Explore More</a>
                </div>
            </div>
            <div class="island-box rounded card border-0 shadow">
                <div class="image-box rounded">
                    <img src="Assests\image\images (17) 1 4.png" class="rounded-top img-fluid" alt="image">
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
                    <a href="#" class="text-decoration-none hover">Explore More</a>
                </div>
            </div>
            <div class="island-box rounded card border-0 shadow">
                <div class="image-box rounded">
                    <img src="Assests\image\images (17) 1 5.png" class="rounded-top img-fluid" alt="image">
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
                    <a href="#" class="text-decoration-none hover">Explore More</a>
                </div>
            </div>
            <div class="island-box rounded card border-0 shadow">
                <div class="image-box rounded">
                    <img src="Assests\image\images (17) 1 6.png" class="rounded-top img-fluid" alt="image">
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
                    <a href="#" class="text-decoration-none hover">Explore More</a>
                </div>
            </div>
            <div class="island-box rounded card border-0 shadow">
                <div class="image-box rounded">
                    <img src="Assests\image\images (17) 2.png" class="rounded-top img-fluid" alt="image">
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
                    <a href="#" class="text-decoration-none hover">Explore More</a>
                </div>
            </div>
            <div class="island-box rounded card border-0 shadow">
                <div class="image-box rounded">
                    <img src="Assests\image\images (17) 1.png" class="rounded-top img-fluid" alt="image">
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
                    <a href="#" class="text-decoration-none hover">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Island Section End -->



<!-- CONTACT SECTION Start-->

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

<!-- Contact Section End -->



<!-- CLIENT SECTION Start -->

<section class="container-fluid my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center poppins fw-bold py-3">Our Client Reviews</h1>
                <p class="poppins w-50 m-auto fs-6 text-center pb-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, vitae facilis. Quaerat dolore
                </p>
            </div>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag pt-5">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-1130px,0px,0px); transition: all 0s ease 0s; width: 3950px;">
                    <div class="owl-item active" style="width: 275px; margin-right: 10px;">
                        <div class="item client border shadow m-2">
                            <div class="client-img">
                                <img src="Assests\image\client-img-1.jpg" alt="imgae">
                            </div>
                            <span class="text-center open-sans d-block fw-bold">Jatin Yadav</span>
                            <p class="text-center open-sans mt-2">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Illo, laudantium.</p>
                            <ul class="list-unstyled d-flex justify-content-center pe-4 mt-3">
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 275px; margin-right: 10px;">
                        <div class="item client border shadow m-2">
                            <div class="client-img">
                                <img src="Assests\image\client-img-1.jpg" alt="imgae">
                            </div>
                            <span class="text-center open-sans d-block fw-bold">Jatin Yadav</span>
                            <p class="text-center open-sans mt-2">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Illo, laudantium.</p>
                            <ul class="list-unstyled d-flex justify-content-center pe-4 mt-3">
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 275px; margin-right: 10px;">
                        <div class="item client border shadow m-2">
                            <div class="client-img">
                                <img src="Assests\image\client-img-1.jpg" alt="imgae">
                            </div>
                            <span class="text-center open-sans d-block fw-bold">Jatin Yadav</span>
                            <p class="text-center open-sans mt-2">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Illo, laudantium.</p>
                            <ul class="list-unstyled d-flex justify-content-center pe-4 mt-3">
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 275px; margin-right: 10px;">
                        <div class="item client border shadow m-2">
                            <div class="client-img">
                                <img src="Assests\image\client-img-1.jpg" alt="imgae">
                            </div>
                            <span class="text-center open-sans d-block fw-bold">Jatin Yadav</span>
                            <p class="text-center open-sans mt-2">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Illo, laudantium.</p>
                            <ul class="list-unstyled d-flex justify-content-center pe-4 mt-3">
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 275px; margin-right: 10px;">
                        <div class="item client border shadow m-2">
                            <div class="client-img">
                                <img src="Assests\image\client-img-1.jpg" alt="imgae">
                            </div>
                            <span class="text-center open-sans d-block fw-bold">Jatin Yadav</span>
                            <p class="text-center open-sans mt-2">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Illo, laudantium.</p>
                            <ul class="list-unstyled d-flex justify-content-center pe-4 mt-3">
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">
                                        grade
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Section End -->


<!-- FOOTER SECTION Start -->

<?php


$this->view("includes/footer");

?>

<!-- Footer Section End -->