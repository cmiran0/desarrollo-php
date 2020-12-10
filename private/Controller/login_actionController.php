<?php
var_dump( $_REQUEST );
$logeandose =  $_REQUEST['name'];
$modelo = ['John', 'Pepe'];



if(in_array($logeandose,$modelo)) {
    
    
    $_SESSION['user_logado'] = $logeandose;

}


header('Location: https://miranda.josemanuelmunoz.com/home');
