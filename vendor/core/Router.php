<?php

namespace vendor\core;

use mysql_xdevapi\Exception;

class Router {

//    public function __construct() {
//        echo 'Hello, world! привіт';
//    }
    /*таблиця маршрутів
    @var array*/
    protected static $routes = [];


    /*поточний маршрут
    @var array*/
    protected static $route = [];


    /*додає маршрут в таблицю маршрутів
    @param string $regexp регулярний вираз маршрута
    @param array $route маршрут ([controller, action, params])*/
        public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }


    /*повертає таблицю маршрутів
    @return array*/
    public static function  getRoutes () {
        return self::$routes;
    }


    /*повертає поточний маршрут ([controller, action, params])
    @return array*/
    public static function  getRoute () {
        return self::$route;
    }


    /*шукає URL в таблиці маршрутів
    @param string $url вхідний URL
    @return boolean*/
    public static function matchRoute ($url) {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
//                debug($pattern);
                foreach ($matches as $k=> $v){
                    if (is_string($k)){
                        $route[$k] = $v;
                    }
                }
//                debug($route);
                if(!isset($route['action'])){
                    $route['action'] = 'index';
                }
//                debug($route);
                //prefix for admin controllers
                if(!isset($route['prefix'])){
                    $route['prefix'] = '';
                }else{
                    $route['prefix'] = '\\';

                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
//                debug($route);
                return true;
            }
        }
        return false;
    }

    /*Перенаправляє URL по коректному маршруту
    @param string $url вхідний URL
    @return void*/
    public static function dispatch($url) {
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if(class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if (method_exists($cObj, $action)) {
                    $cObj->$action();
                    $cObj->getView();
                }else{
//                    echo " Метод <b>$controller::action </b> не знайдено";
                    throw new \Exception(" Метод <b>$controller::action </b> не знайдено", 404);
                }
            }else{
//                echo "Контролер <b>$controller</b> не найден";
                throw new \Exception("Контролер <b>$controller</b> не знайдено", 404);
            }
        }else{
//            http_response_code(404);
//            include '404.html';
            throw new \Exception("Сторінку не знайдено", 404);
        }
    }

    protected static function upperCamelCase($name) {
        return str_replace(' ', '',ucwords(str_replace('-', ' ', $name)));
//        debug($name);
    }

    protected static function lowerCamelCase($name) {
        return lcfirst(self::upperCamelCase($name));
//        debug($name);
    }

    protected static function removeQueryString ($url) {
        if ($url){
            $params = explode('&', $url, 2);
            if (false === strpos($params['0'], '=')) {
                return rtrim($params[0], '/');
            }else{
                return '';
            }
        }
        debug($url);
        return $url;
    }
}