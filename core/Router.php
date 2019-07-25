<?php
namespace Cms\Core;

class Router {

    public $routes = [];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        $uri = explode("?", $uri)[0];
        if(array_key_exists( $uri, $this->routes[$method])) {
           return $this->callMethod(...explode("@", $this->routes[$method][$uri]));
        }

        throw new \Exception('This route does not exist. 404');
    }

    private function callMethod($controllerName, $methodName)
    {
        $controllerName = "\Cms\Controllers\\{$controllerName}";
        $controller = new $controllerName;
        $controller->$methodName();
    }

}