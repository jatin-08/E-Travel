<?php

require_once("app.php");
require_once("config.php");
require_once("controller.php");
require_once("function.php");
require_once("database.php");
require_once("model.php");


spl_autoload_register(function ($class_name) {
    require MODEL . ucfirst($class_name) . ".php";
});

?>