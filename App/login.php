<!-- LOGIN BACKEND SECTION -->

<?php

include("../App\connection.php");
include("../App/login-UI.php");


if (isset($_POST['signin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != "") {

        $query = "SELECT * FROM user_info WHERE email = '$email' && password = '$password'";
        $data = mysqli_query($connection, $query);
        if ($data) {
            // header("../Public\index.php");
            // exit;
            echo "<script>alert('You login Sucessfully!')</script>";
        } else {
            echo "<script>alert('You not login Sucessfully!')</script>";
        }
    } else {
        echo "<script>alert('Fill the form!')</script>";
    }
}

?>