<?php

class FailureController extends Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    public function render()
    {
        $this->view->render('failure/index');
    }
}