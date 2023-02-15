<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbase = "travel";

$connection = mysqli_connect($servername, $username, $password, $dbase);
if ($connection) {
    // echo "Connection establish";
} else {
    echo "Connection fail";
}


?>