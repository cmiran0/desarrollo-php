<?php



if($request == 'productos') {

    if( ! isset( $_SESSION['user_logado']) ) {


        header('Location: https://miranda.josemanuelmunoz.com/login');
        exit;
    }
}

