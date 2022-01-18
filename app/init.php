<?php 
$serverProtocol = $_SERVER['REQUEST_SCHEME'];
$serverName = str_replace('//', '/', $_SERVER['SERVER_NAME'] . '/' . $_SERVER['SCRIPT_NAME']);
$adressDucument = $serverProtocol . '://' .  str_replace('/index.php', '' ,$serverName);

define('CSSADRESS', $adressDucument . '/css/style.css');