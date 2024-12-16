<?php


//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

$username = $_POST['username'];
$password = $_POST['password'];

$userFile = fopen("users/$username.txt",'c+') or die('Invalid User');

fwrite($userFile,$password);

fclose($userFile);
echo 'User Registered';