<?php

class FormController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render('form/index');
    }
}
