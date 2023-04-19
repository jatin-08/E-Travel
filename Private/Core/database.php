<?php

class Database
{

    // Creating a connect() -> It will establish the connection btw database and the pages
    private function connect()
    {
        $string = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;
        if (!$conn = new PDO($string, DBUSER, DBPASSWORD)) {
            die("could not connect to database");
        }
        return $conn;
    }
}

?>