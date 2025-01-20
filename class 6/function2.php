<?php

declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

function sumNumbers(...$numbers)
{
    $sum = 0;
    for ($i=0;$i<count($numbers);$i++)
    {
        $sum += $numbers[$i];
    }

    return $sum;
}
echo sumNumbers(1,2,3,4);
echo '<hr />';

function sampleMath($pow,...$numbers)
{
    $sum = 0;
    for($i=0;$i<count($numbers);$i++)
    {
        $sum += ($pow * $numbers[$i]);
    }
    return $sum;
}
echo sampleMath(2,1,2,3,4);
echo '<hr />';

function sumNumbInt(int $number1,int $number2)
{
    $sum = $number1 + $number2;
    return $sum;
}
echo sumNumbInt(10,14);
echo '<hr>';

function returnError(int $number1 , int $number2) : string
{
    return ($number1 / $number2)."";
}

var_dump(returnError(20,10));