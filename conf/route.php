<?php

class Routing {

    public static function buildRoute() {

        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";


        $URIParts = explode('?',$_SERVER['REQUEST_URI']);
        $route = explode('/',$URIParts[0]);


        if ($route[1] != "") {
            $controllerName = ucfirst($route[1] . "Controller");
            $modelName = ucfirst($route[1] . "Model");
        }

        include CONTROLLER_PATH . $controllerName . '.php';
        include MODEL_PATH . $modelName . '.php';

        if (isset($route[2]) && $route[2] != '') {
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action();

    }

}