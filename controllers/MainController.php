<?php

class MainController extends Controller
{
    function __construct()
    {
        parent::__construct();

        echo "<p>MainController.php</p>";
    }

    function render()
    {

        $this->view->render('login/index');
    }
}
