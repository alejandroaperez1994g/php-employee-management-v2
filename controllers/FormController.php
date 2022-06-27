<?php

include_once ENTITIES . "/Employees.php";


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

    public function createForm()
    {
        $result = $this->model->insert($_POST);

        if($result == "OK"){
            $this->view->message = "User created Successfully!";
        }else{
            $this->view->message = "User creation failed!";
        }
        $this->view->render('form/index');
    }

    public function detailForm($param)
    {
        $content = $this->model->getEmployeeById($param[0]);
        $this->view->employee=$content;
        $this->view->render('form/index');

    }

    public function updateForm($param){
        // var_dump($_POST);
        $result = $this->model->updateEmployee($_POST, $param[0]);

        if($result == "OK"){
            $this->view->message = "User updated Successfully!";
        }else{
            $this->view->message = "User update failed!";
        }
        $this->view->render('form/index');
    }
}
