<?php

class BoardController extends Controller
{

    function __construct()
    {
        parent::__construct();
        echo "<p>BoardControler.php</p>";
    }

    public function __call($method, $arguments)
    {
        if ($method == 'consultBoard') {
            if (count($arguments) == 0) {
                return call_user_func_array(array($this, 'consultBoard'), $arguments);
            } else if (count($arguments) == 1) {
                return call_user_func_array(array($this, 'consultBoardById'), $arguments);
            }
        } else {
            return false;
        }
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

    function consultBoardById()
    {
        echo "consultar tabla de trabajadores y pillar 1\n";
        $this->model->getEmployeeById();
    }
}
