<?php

$data = readfile('db/users.txt');

echo $data;

echo '<hr>';
$data2 = file_get_contents('db/users.txt');
echo $data2;

echo '<hr>';
$oFile = fopen('db/users.txt','r+');

echo $oFile;
echo '<br>';
echo filesize('db/users.txt');
echo '<br>';
echo fread($oFile,filesize('db/users.txt'));
fclose($oFile);
echo '<hr>';