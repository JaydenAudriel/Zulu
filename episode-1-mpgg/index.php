<?php namespace Listener;
//Check if database config file exists, is not it means you need to install the script from zero :)
if(!file_exists('./config/database.php')){
    header("location: ./install/requirements.php");
    die();
}

//Database
require_once './config/database.php';

//Parameters
$parameters = include './config/parameters.php';

//PayPal IPN
include './vendor/PaypalIPN.php';

use PaypalIPN;
$ipn = new PaypalIPN();


//View
require_once './templates/main.template.php';
