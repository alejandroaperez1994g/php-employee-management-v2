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

    function logoutBoard()
    {
        session_start();
        unset($_SESSION);
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();

        header("Location:" . BASE_URL);
    }
}