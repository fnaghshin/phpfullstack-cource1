<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//$firstname = $_REQUEST['fname'];
//$age = $_REQUEST['age'];
//
//echo "$firstname $age";

$fname = $_POST['fname'];
$age = $_POST['age'];

echo '<pre>';
print_r($_GET);
echo '</pre>';