<?php

class Login extends Controller
{
    function index()
    {
        $errors = [];
        $this->view("login", ['errors' => $errors]);
    }
}


?>