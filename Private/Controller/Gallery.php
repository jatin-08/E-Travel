<?php

class Gallery extends Controller
{
    function index()
    {
        $errors = [];
        $this->view("gallery", ['errors' => $errors]);
    }
}


?>