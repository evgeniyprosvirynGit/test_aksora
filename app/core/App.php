<?php

namespace journal\app\core;

class App
{

    protected $controllerBase = '../app/Controllers/';
    protected $controller     = 'Index';
    protected $method         = 'index';
    protected $params         = [];

    public function __construct()
    {

        $url = $this->parsingUrl();

        $url[0] = ucfirst($url[0]);

        if (file_exists($this->controllerBase. $url[0] .'Controller.php')) {

            $this->controller = $url[0];
            unset($url[0]);

        }

        $this->controller = 'journal\app\Controllers\\'.$this->controller.'Controller';
        $this->controller = new $this->controller;

        if (isset($url[1])) {

            if (method_exists($this->controller,$url[1])) {

                $this->method = $url[1];
                unset($url[1]);

            }

        }

        $this->params = ($url) ? array_values($url) : [];

        call_user_func_array([$this->controller,$this->method],$this->params);

    }

    public function parsingUrl()
    {

        if (isset($_GET['url'])) {

            return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));

        }

    }

}