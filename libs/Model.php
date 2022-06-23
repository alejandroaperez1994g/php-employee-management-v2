<?php

class Model
{

    function __construct()
    {
        echo "Model.php";
        $this->db = new Database();
    }
}
