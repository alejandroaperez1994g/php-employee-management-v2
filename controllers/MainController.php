<?php

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
        $this->model->autenticate();
    }
}
