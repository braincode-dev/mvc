<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-05-01
 * Time: 22:58
 */

class Router {

    private $routes;

    public function __construct(){

        $routersPath = ROOT . "/config/routes.php";
        $this->routes = include($routersPath);
    }

    private function getUrl(){
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){

        // get string request

        $url = $this->getUrl();

        // check this request in routes
        foreach ($this->routes as $urlPattern => $path){

            if (preg_match("~$urlPattern~", $url)){

                $internalRoute = preg_replace("~$urlPattern~", $path, $url);

                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . "Controller";
                $controllerName = ucfirst($controllerName);

                $actionName = "action" . ucfirst(array_shift($segments));


                $params = $segments;




                $controllerFile = ROOT . "/controllers/" . $controllerName . ".php";

//                echo $actionName;
//
//                die;

                if (file_exists($controllerFile)){
                    include_once ($controllerFile);
                }



                $controllerObject = new $controllerName;

//                echo $actionName;


                $result = call_user_func_array(array($controllerObject, $actionName), $params);


                if ($result != NULL){
                    break;
                }

            }

        }

        // if she is yes include action


        // include file class-controller


        // create object call method
    }
}