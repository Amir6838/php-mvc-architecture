<?php
require_once '../app/core/controller.php';

class home extends controller{

    public function writename($nameModel, $fname='', $lname = ''){
        var_dump($fname);
        //for Test
        echo $this->localModel($nameModel)->send($fname, $lname);
    }

    public function test(){
        echo 'method_exists' . '<br>';
    }

    public function parametr($name){
        print_r($name);
        echo '<br>';
    }

    public function view(){
        $this->loadView('home', ['amir', 'khodi']);
    }
}