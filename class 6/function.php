<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function sampleFunction($number1=10,$number2=30,$number3='')
{
    $number1 = (int)$number1;
    $number2 = (int)$number2;
    $sum = (int)($number1 + $number2);
    return $sum;
}



echo sampleFunction(10,11.5);


echo '<hr>';

echo sampleFunction(10,-20);

if(isset($_COOKIE['firstname']))
{
    echo 'hello '.$_COOKIE['firstname'];
}