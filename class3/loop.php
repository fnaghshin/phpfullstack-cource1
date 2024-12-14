<?php

for($i = 1; $i<10;$i++)
{
//    if($i == 4)
//        break;
    echo $i.'<br>';
}
echo '<hr />';

$j = 1;
while ($j <10)
{
    echo $j.'<br>';
    $j++;
}
echo '<hr />';
$k = 10;
do{
    echo $k.'<br>';
    $k++;
}while($k<10);

echo '<hr />';
$isTrue = true;
$o = 1;
while($isTrue)
{
    echo 'Hello <br >';
    $o++;
    if($o > 20)
        $isTrue = false;
}


