<?php
class controller{
    public function localModel($name){
        if (file_exists('../app/model/' . $name . '.php' )) {
           
            require_once '../app/model/' . $name . '.php';
            return new $name;
        }
    }

    public function loadView($name, $data = []){
        if (file_exists('../app/view/' . $name . '.php')) {
            require_once '../app/view/' . $name . '.php';
        }
    }
}