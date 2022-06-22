<?php


class Controller
{


    public function __construct()
    {
        echo "<p>Controller.php</p>";
        $this->view = new View();
    }
}
