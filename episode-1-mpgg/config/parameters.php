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
    'server_name' => 'LESOFT',


    /*
    |--------------------------------------------------------------------------
    | PayPal Email
    |--------------------------------------------------------------------------
    |
    | This value is the Email that will be used to receive the money for
    | each purchase.
    |
    */
    'paypal_email' => 'kazutodarker@gmail.com',



    /*
    |--------------------------------------------------------------------------
    | PayPal IPN Script URL
    |--------------------------------------------------------------------------
    |
    | This value is the Email that will be used to receive the money for
    | each purchase.
    |
    */
    'ipn_script' => 'http://lesoft.tech/test/ipn/app.php',



    /*
    |--------------------------------------------------------------------------
    | Return Pages
    |--------------------------------------------------------------------------
    |
    | This value determines the URL where the user will be redirected after
    | a purchase, when is successfully or not.
    | By default for success: /success.php
    | By default for errors: /error.php
    |
    */
    'return_success' => '/success.php',
    'return_error' => '/error.php',



    /*
    |--------------------------------------------------------------------------
    | Costs
    |--------------------------------------------------------------------------
    |
    | This Array determines the cost that each given amount of Coins will give.
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
    | References: https://en.wikipedia.org/wiki/ISO_4217#Active_codes
    |
    */
    'currency_code' => 'USD',




];