<?php

class BoardController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }


    public function render()
    {
        $this->view->render('board/index');
    }

    function consultBoard()
    {
        $content = $this->model->getAllEmployees();
        $this->view->employees = $content;
        $this->view->render('board/index');
    }

    function consultIdBoard($parameter)
    {

        $content = $this->model->getEmployeeById($parameter[0]);
        $this->view->employees = $content;
        $this->view->render('form/index');
    }

    function deleteBoard($parameter)
    {
        if ($this->model->delete($parameter[0])) {
            $this->view->message = "Employee deleted succesfully";
        } else {
            $this->view->message = "Error deleting employee";
        }

        $this->consultBoard();
    }
}
