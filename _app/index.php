<?php
// Config
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

$rota = explode("/",$_GET['path']);

print_r($rota);
$controller = $rota[1];
$action	    = $rota[2];

require "controllers/".$controller."Controller.php";

$class = ucfirst($controller)."Controller";
$navegacao = new $class();

$navegacao->$action();
?>