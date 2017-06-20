<?php
// Config
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

$rota = explode("/",$_GET['path']);

$controller = $rota[0];
$action	    = $rota[1];

if(isset($rota[2]))
{
	$_POST['id'] = $rota[2];
}

require "controllers/".$controller."Controller.php";
$class = ucfirst($controller)."Controller";
$navegacao = new $class();

$navegacao->$action();
?>