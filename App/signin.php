<?php

require("connection.php");

if (isset($_POST['signup'])) {


    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $conpassword = mysqli_real_escape_string($connection, $_POST['conpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $conpass = password_hash($conpassword, PASSWORD_BCRYPT);

    $emialquery = "SELECT * FROM user_info WHERE email = '$email' ";
    $equery = mysqli_query($connection, $emialquery);

    $emailcount = mysqli_num_rows($equery);

    if ($emailcount > 0) {
        echo "email already exists";
    } else {
        if ($password === $conpassword) {

            $query = "INSERT INTO user_info (name, email, password, conpassword) VALUES('$name','$email','$pass','$conpass')";
            $data = mysqli_query($connection, $query);

            if ($data) {

                // echo "<script>alert('Information has been stored successfully!')</script>";

                ?>

                <meta http-equiv="refresh" content="0; url = http://localhost/E-Travel/App/login-UI.php" />

                <?php

            } else {
                echo "<script>alert('Information has not been stored successfully!')</script>";
            }
        } else {
            echo "password is wrong!";
        }
    }


}

?>