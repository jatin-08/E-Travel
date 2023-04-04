<?php
ob_start();

$URL = isset($_GET["url"]) ? $_GET['url'] : "index";

$URL = explode("/", $URL);

$page = $URL[0];

require_once("App\autoload.php");


if (file_exists("Public/" . $page . ".php")) {
    require("Public/" . $page . ".php");

} else if (file_exists("admin/" . $page . ".php")) {
    require("admin/" . $page . ".php");
} else {
    require("pages/404.php");
}


// echo "<pre>";
// print_r($url);
// echo "</pre>";


?>