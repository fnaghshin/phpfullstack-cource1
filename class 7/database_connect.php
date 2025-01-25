<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$DBNAME   = 'phpcourse';
$server   = '127.0.0.1';// 'localhost'
$username = 'root';
$password = 'mysql';


$link = new mysqli($server,$username,$password,$DBNAME,3306);

if($link->connect_error) {
    die("Error : " . $link->connect_errno);
}

