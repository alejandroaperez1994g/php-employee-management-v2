<?php


class Controller
{
    public function __construct()
    {
        echo "<p>Controller.php</p>";
        $this->view = new View();
    }

    function loadModel($model)
    {
        $url = MODELS . '/' . $model . 'Model.php';

        if (file_exists($url)) {
            require $url;

            $modelName = $model . 'Model';

            $this->model = new $modelName();
        }
    }
}
