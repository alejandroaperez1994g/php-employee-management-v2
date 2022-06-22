<?php


class App
{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);




        if (empty($url[0]) || $url[0] == "login") {
            $fileController = CONTROLLERS . '/' . 'MainController.php';
            require_once($fileController);
            $controller = new MainController();
            $controller->render();
        }

        $class = ucfirst($url[0]);
        $fileController = CONTROLLERS . '/' . $class . 'Controller.php';
        $classController = $class . 'Controller';


        if (file_exists($fileController)) {
            require_once($fileController);
            $controller = new $classController;
            // $controller->render();
            echo $fileController;
            echo "<br>";
            var_dump($controller);
            echo "<br>";
            echo $classController;
        }
    }
}
