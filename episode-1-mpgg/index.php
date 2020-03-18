<?php namespace Listener;
//Database
require_once './config/database.php';

//Parameters
$parameters = include './config/parameters.php';

//PayPal IPN
include './vendor/PaypalIPN.php';

use PaypalIPN;
$ipn = new PaypalIPN();
$ipn->useSandbox();


//View
require_once './layouts/main.layout.php';
