<?php namespace Listener;

//database
require './config/database.php';
//PayPal IPN
require './vendor/PaypalIPN.php';
//Parameters
$parameters  = include './config/parameters.php';

//Use IPN Class, verify information, if verified then insert data into database
use PaypalIPN;
$ipn = new PaypalIPN();
 $verified = $ipn->verifyIPN();
 if ($verified) {
     $query = "INSERT INTO account.paypal_ipn SET item_name='".$_POST['item_name']."', payer_id='".$_POST['payer_id']."', amount='".$_POST['mc_gross']."', login='".$_POST['custom']."';";
     $query .= "UPDATE account.account SET coins=coins+".$parameters['costs'][floor($_POST['mc_gross'])]." WHERE login='".$_POST['custom']."';";
     $db->multi_query($query);
 }

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
