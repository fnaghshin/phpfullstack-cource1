<?php

$data = file_get_contents('blog/db.txt');

$data_array = json_decode($data,true);

$array_ser = serialize($data_array);
$array_unser = unserialize($array_ser);
echo json_encode($data_array);
echo '<hr>';
echo $array_ser;
echo '<hr>';
var_dump($array_unser);