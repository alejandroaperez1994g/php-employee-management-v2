<?php

class FormController extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "<p>FormController.php</p>";
    }

    public function render()
    {
        $this->view->render('form/index');
    }
}
