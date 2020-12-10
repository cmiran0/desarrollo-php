<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers:Q-Empresa-usuario, Q-Empresa-id,Q-Empresa-dominio, Authorization, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$verbo = $_SERVER['REQUEST_METHOD'];

if ($verbo == "OPTIONS") {
    die();
}

//session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

include(__DIR__ . "/../private/router.php");

$segment = '404';

if (in_array($uriSegments[1], $rutas)) {
    $segment = ($uriSegments[1] == '') ? 'home' : $uriSegments[1];
}

//include('Middleware/auth.php');


include(__DIR__ .'/../private/Controller/' . $segment . 'Controller.php');
/*

$class= $segment . 'Controller';

$controlador = new $class ;

$method = "index";

$request=  array("three", "four");

call_user_func_array(array($controlador , $method), $request);*/

echo $response;


