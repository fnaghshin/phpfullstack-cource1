<?php

$number1 = 40;
$number2 = 30;

if($number1 > $number2)
{
    echo 'number 1 bigger than number 2';
}

echo '<hr>';

if($number1 > $number2){
    echo 'number 1 bigger than number 2';
}else{
    echo 'number 2 bigger than number 1';
}

echo '<hr>';
if($number1 > $number2) {
    echo 'number 1 bigger than number 2';
}elseif($number1 < $number2){
    echo 'number 2 bigger than number 1';
}else{
    echo 'number 2 and number 1 is equal';
}
echo '<hr>';

$biggerNumber = ($number1>$number2)?$number1:$number2;
echo $biggerNumber;

echo '<hr>';

$firstname = 'farzaad';

$import = $firstname ?? 'firstname not exist!';
echo $import;