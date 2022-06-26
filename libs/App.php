<?php

require_once(CONTROLLERS . "/FailureController.php");

class App
{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);




        if (empty($url[0])) {
            $fileController = CONTROLLERS . '/' . 'MainController.php';
            require_once($fileController);
            $controller = new MainController();


            $controller->render();

            return false;
        }

        $class = ucfirst($url[0]);
        $fileController = CONTROLLERS . '/' . $class . 'Controller.php';
        $classController = $class . 'Controller';


        if (file_exists($fileController)) {
            require_once($fileController);
            $controller = new $classController;
            $controller->loadModel($class);

            $nParam = sizeof($url);

            if ($nParam ==  2) {
                if ($controller->{$url[1] . $class}() === false) {
                    $error = new FailureController();
                    $error->render();
                }
            } else if ($nParam > 2) {
                $parameter = [];
                array_push($parameter, $url[2]);
                if ($controller->{$url[1] . $class}($parameter) === false) {
                    $error = new FailureController();
                    $error->render();
                }
            }
        } else {
            $error = new FailureController();
            $error->render();
        }
    }
}
