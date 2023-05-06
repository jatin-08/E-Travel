<?php

class Signup extends Controller
{
    function index()
    {
        $errors = [];

        if(count($_POST)>0){

            $user = new User_info();
            if($user->validate($_POST)){

                $user->insert($_POST);

            }else{
                $errors = $user->errors;
            }
        }


        $this->view("signup", ['errors' => $errors]);
    }
}

?>