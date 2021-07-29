<?php

class Application
{

    public static function process()
    {
        $controllerName = "ControllerHome";
        $task = "index";

        if (!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }
        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }

        $controllerName = "controllers\\Controller" . $controllerName;
        $controller = new $controllerName();

        $controller->$task();
    }
}
