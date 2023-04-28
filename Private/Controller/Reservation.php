<?php

  class Reservation extends Controller
  {
    function index(){

      $errors = [];

      // $user = new User();

      // if(!empty($_POST)){

      //   if($user->validate($_POST)){
      //       $user->insert($_POST);

      //   }else{
      //     $errors = $user->errors;
      //   }
      // }
      $this->view('reservation',['errors'=>$errors]);
    }
  }
  
?>