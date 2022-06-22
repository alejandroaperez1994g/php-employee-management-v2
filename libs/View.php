<?php


class View
{

    function __construct()
    {
        echo "View.php";
    }

    function render($name)
    {

        require VIEWS . '/' . $name . '.php';
    }
}
