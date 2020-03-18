<?php

return [
    /*
   |--------------------------------------------------------------------------
   | Server Name
   |--------------------------------------------------------------------------
   |
   | This value is only for Copyright.
   |
   */
    'server_name' => 'your_server_name',


    /*
    |--------------------------------------------------------------------------
    | PayPal Email
    |--------------------------------------------------------------------------
    |
    | This value is the Email that will be used to receive the money for
    | each purchase.
    |
    */
    'paypal_email' => 'your_paypal_email',



    /*
    |--------------------------------------------------------------------------
    | PayPal IPN Script URL
    |--------------------------------------------------------------------------
    |
    | This value is the URL where the script (app.php) is located.
    | By default: /zulu/app.php
    |
    */
    'ipn_script' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/zulu/app.php',



    /*
    |--------------------------------------------------------------------------
    | Return Pages
    |--------------------------------------------------------------------------
    |
    | This value determines the URL where the user will be redirected after
    | a purchase, when is successfully or not.
	|
    | By default for success: success.php
    | By default for errors: error.php
    |
    */
    'return_success' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/zulu/success.php',
    'return_error' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/zulu/error.php',



    /*
    |--------------------------------------------------------------------------
    | Costs
    |--------------------------------------------------------------------------
    |
    | This Array determines the cost that each given amount of Coins will give.
    |
	| Syntax: 'Price_to_pay' => 'Coins_to_give'
    |
    */
    'costs' => [
        '15' => '500',
        '30' => '800',
        '60' => '1300',
    ],



    /*
    |--------------------------------------------------------------------------
    | Currency Code
    |--------------------------------------------------------------------------
    |
    | This value determines the currency in which PayPal works.
    | Supported: AUD, BRL, CAD, CZK, DKK, EUR, HDK, HUF, INR, ILS, JPY, MYR,
    | MXN, TWD, NZD, NOK, PHP, PLN, GBP, RUB, SGD, SEK, CHF, THB, USD
    |
	| References: https://en.wikipedia.org/wiki/ISO_4217#Active_codes
    |
    */
    'currency_code' => 'USD',




];