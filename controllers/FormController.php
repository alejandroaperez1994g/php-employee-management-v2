<?php

class FormController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function renderForm()
    {
        $this->view->render('form/index');
    }
}
