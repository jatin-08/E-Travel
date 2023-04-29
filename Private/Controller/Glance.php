<?php

class Glance extends Controller
{
    function index()
    {
        $errors = [];
        $this->view("glance", ['errors' => $errors]);
    }
}


?>