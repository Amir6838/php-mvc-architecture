<?php
require_once '../app/core/controller.php';

class contentus extends controller{
    public function write($name = '', $email = ''){
        echo 'your Name Is:' . $name . '<br>' . 'your Email Is:' . $email;
    }
}