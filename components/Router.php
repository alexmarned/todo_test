<?php

//  echo 'Router.php';
//include "config/routes.php"; 

class Router {

    private $routes;

    public function __construct() {
        session_start();
        //$routesPath = ROOT.'/config/routes.php';
        $routesPath = 'config/routes.php';

        //    include_once 'config/config.php';
        //  require_once 'config/routes.php'; 

        $this->routes = include($routesPath);
        //   var_dump( $this->routes);
        //   exit();
    }

// Return type

    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {

            if (preg_match("~$uriPattern~", $uri)) {
                //      var_dump($uriPattern , $uri);
                //    exit();

                /* 				echo "<br>Где ищем (запрос, который набрал пользователь): ".$uri;
                  echo "<br>Что ищем (совпадение из правила): ".$uriPattern;
                  echo "<br>Кто обрабатывает: ".$path; */

                // Получаем внутренний путь из внешнего согласно правилу.

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                /* 				echo '<br>Нужно сформулировать: '.$internalRoute.'<br>'; */

                $segments = explode('/', $internalRoute);
                unset($segments[0]);
                //    print_r($segments);


                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                /*
                  var_dump($parameters);
                  exit();
                 */

                //$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
                $controllerFile = 'controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }





                $controllerObject = new $controllerName;
                /* $result = $controllerObject->$actionName($parameters); - OLD VERSION */
                /* $result = call_user_func(array($controllerObject, $actionName), $parameters); */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                /*
                  var_dump($result);
                  die();
                  exit();
                 */

                /*
                  if ($result == 'false'){
                  echo 'страница не найдена';
                  // header('Lacation:' . '../views/main/index.php');
                  include_once('../views/main/index.php');
                  exit();
                  }
                 */




                if ($result != null) {
                    break;
                }
            }
        }
    }

}
