<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbase = "travel";

$connection = mysqli_connect($servername, $username, $password, $dbase);
if ($connection) {
    echo "<script>alert('Connection establish')</script>";
} else {
    echo "<script>alert('Connection not establish')</script>";
}


?>