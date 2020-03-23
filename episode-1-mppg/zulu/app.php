<?php namespace Listener;

//Database
require './config/database.php';
//PayPal IPN
require './vendor/PaypalIPN.php';
//Parameters
$parameters = include './config/parameters.php';

//Use IPN Class, verify information, if verified then insert data into database
use PaypalIPN;

$ipn = new PaypalIPN();
$verified = $ipn->verifyIPN();
if ($verified) {
    if ($_POST['bussines' == $parameters['paypal_email']]) {
        $data = [
            'item_name' => $_POST['item_name'],
            'txn_id' => $_POST['txn_id'],
            'payer_id' => $_POST['payer_id'],
            'payer_email' => $_POST['payer_email'],
            'amount' => $_POST['mc_gross'],
            'login' => $_POST['custom']
        ];

        $stmt_insert = $db->prepare("INSERT INTO paypal_ipn (item_name, txn_id, payer_id, payer_email, amount, login, created_at) VALUES (?,?,?,?,?,?,NOW());");
        $stmt_update = $db->prepare("UPDATE account SET coins = coins + ? WHERE login = ?;");

        $stmt_insert->bind_param("ssssss", $data['item_name'], $data['txn_id'], $data['payer_id'], $data['payer_email'], $data['amount'], $data['login']);
        $stmt_update->bind_param("ss", $parameters['costs'][floor($data['amount'])], $data['login']);

        $stmt_insert->execute();
        $stmt_update->execute();

        $stmt_insert->close();
        $stmt_update->close();
        $db->close();
    }
}

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
