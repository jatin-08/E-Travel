<?php

class Login extends Controller
{


  function index()
  {
    $errors = [];

    if (count($_POST) > 0) {
      $user = new User_info();

      if ($row = $user->where('uemail', $_POST['uemail'])) {
        $row = $row[0];
        if (password_verify($_POST['upasswd'], $row->upasswd)) {
          $this->redirect('home');
        } else {
          $errors['email'] = 'Username or password are incorrect';
        }
      } else {
        $errors['email'] = 'Username or password are incorrect';
      }
    }

    $this->view('login', ['errors' => $errors]);
  }
}

?>