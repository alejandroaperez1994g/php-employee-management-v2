<?php

class BoardController extends Controller
{

    function __construct()
    {
        parent::__construct();
        echo "<p>Dashboard.php</p>";
    }

    public function render()
    {
        $this->view->render('board/index');
    }
}
