<?php


include("connection.php");
include("../html/signin.php");

if (isset($_POST['signup'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO user_info (name, email, password) VALUES('$name','$email','$password')";
    $data = mysqli_query($connection, $query);
    if ($data) {
        echo "<script>alert('Information has been stored successfully!')</script>";

        ?>

        <meta http-equiv="refresh" content="0; url = http://localhost/placement%20project/html/" />

        <?php

    } else {
        echo "<script>alert('Information has not been stored successfully!')</script>";
    }
}

?>