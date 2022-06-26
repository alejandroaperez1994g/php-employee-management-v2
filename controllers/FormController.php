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

    public function insertForm()
    {
        // $this->model->insert();
        echo "insert nuevo trabajador";
    }

    public function updateForm()
    {
        // $this->model->update();
        echo "update nuevo trabajador";
    }
}
