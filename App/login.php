<!-- LOGIN BACKEND SECTION -->

<?php

include("../App\connection.php");


if (isset($_POST['signin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != "") {

        $query = "SELECT * FROM user_info WHERE email = '$email' && password = '$password'";
        $data = mysqli_query($connection, $query);
        if ($data) {
            ?>

            <meta http-equiv="refresh" content="0; url = http://localhost/placement%20project/Public/index.php" />

            <?php
        } else {
            echo "<script>alert('You not login Sucessfully!')</script>";
        }
    } else {
        echo "<script>alert('Fill the form!')</script>";
    }
}

?>