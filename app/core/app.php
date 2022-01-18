<?php
require_once '../app/init.php';
class test
{
    
    public $controller;
    public $method;
    public $parametr = [];
    public function __construct()
    {
        $url = $this->parseURL();
        if (file_exists('../app/controller/' . $url[0] . '.php')) {
            //For Test
            //echo 'FileExists' . '<br>';
            require_once '../app/controller/' . $url[0] . '.php';
            $this->controller = new $url[0];
            unset($url[0]);

            if (isset($url[1]) and method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                //$this->controller->$this->method;
                unset($url[1]);
                if (isset($url[2])) {
                    $this->parametr = $url;
                    call_user_func_array([$this->controller, $this->method], $this->parametr);
                }
            }else{
                echo 'method_not_exists' . '<br>';
            }

        }else{
            echo 'FileNotExists' . '<br>';
        }

    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            return explode('/', $_GET['url']);
        } else {
            return 'Not Set';
        }
    }

}
