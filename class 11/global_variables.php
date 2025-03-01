<?php


define('number',10);
$number = 1;



function echo_number()
{
    global $number;
    $number++;
    echo $number;
    echo '<br />';
    define('number',number+1);
    echo number;
    echo '<br />';
}


echo_number();
echo_number();
echo_number();
echo_number();
echo_number();
echo_number();

