<!-- LOGIN BACKEND SECTION -->

<?php

include("../App\connection.php");


if (isset($_POST['signin'])) {

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $email_search = "SELECT * FROM user_info WHERE email = '$email' ";
    $email_query = mysqli_query($connection, $email_search);
    $email_count = mysqli_num_rows($email_query);

    if ($email_count) {

        $email_pass = mysqli_fetch_assoc($email_query);
        $getpassword = $email_pass['password'];
        $pass_decode = password_verify($password, $getpassword);


        if ($pass_decode) {

            ?>
            <meta http-equiv="refresh" content="0; url = http://localhost/E-Travel/Public/index.php" />
            <?php
        } else {
            echo "You not login Sucessfully!";
        }
    } else {
        echo "<p>Enter the Valid Email!</p>";
    }

}

?>