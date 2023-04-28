<?php

class Reservation extends Controller{
    function index(){
       $errors = [];

        $this->view("reservation",['errors'=>$errors]);
    }
}




?>