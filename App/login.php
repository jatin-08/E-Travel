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
        echo $getpassword;
        // echo $getpassword;
        // echo password_verify($password, $getpassword);
        // $pass_decode = password_verify($password, $getpassword);
        // echo $pass_decode;

        // $query = "SELECT * FROM user_info WHERE email = '$email' && password = '$password'";
        // $data = mysqli_query($connection, $query);

        if (password_verify($password, $getpassword)) {
            // echo "Login successfully!";

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