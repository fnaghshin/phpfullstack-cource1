<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$name = 'fnaghshin';
$age = 40;
$height = 1.74;
$projects = ['',''];


//define('sitename','Sample Site');
define('contact_phone','');




echo $name.'<br />';
echo (defined('sitename'))?sitename:'sitename not defined';
echo '<br>';

$name = "farzaad";

if(!defined('sitename'))
    define('sitename','melorinet');



echo $name.'<br />';
echo sitename;
echo '<br>';