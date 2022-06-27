<?php

session_start();

class MainController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {

        $this->view->render('login/index');
    }
    function authMain()
    {
        $userData = $this->model->autenticate();
        // var_dump($userData[0]->email);

        if($userData[0]->email == $_POST['email'] && password_verify($_POST['password'], $userData[0]->password)){

            $_SESSION['email'] = $userData[0]->email;

            header("Location: ../board/consult");
        }
    }
}
