<?php
class controller{
    public function localModel($name){
        if (file_exists('../app/model/' . $name . '.php' )) {
           
            require_once '../app/model/' . $name . '.php';
            return new $name;
        }
    }
}