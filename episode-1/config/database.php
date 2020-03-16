<?php

$db = new mysqli('localhost', 'root', null, 'account');
if(!$db){
    require_once 'layouts/error.layout.php';
    die();
}