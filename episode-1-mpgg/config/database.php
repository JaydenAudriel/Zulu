<?php

$db = new mysqli('localhost', 'root', null);
if(!$db){
    require_once 'layouts/error.layout.php';
    die();
}