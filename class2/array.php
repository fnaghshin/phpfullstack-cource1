<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/*
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 * NULL
 * Resource
 *
 */
//$var1 = "Any";
//$var2 = 20;
//$var3 = 10.11;
//$var4 = true;
//$var5 = ['string','integer'];
//$var7 = null;
//
//var_dump($var1);
//echo '<br>';
//var_dump($var2);
//echo '<br>';
//var_dump($var3);
//echo '<br>';
//var_dump($var4);
//echo '<br>';
//var_dump($var5);
//echo '<br>';
//var_dump($var7);
//echo '<br>';

$sampleArray = ['red','blue','green'];
//$sampleArray2 = array('apple','banana');
//
$sampleArray[] = 'brown';
$sampleArray[] = 'brown2';
$sampleArray[] = 'brown3';

$sampleArray[4] = 'black';
////echo '<pre>';
////print_r($sampleArray);
////echo '</pre>';
////
////echo '<pre>';
////print_r($sampleArray2);
////echo '</pre>';
//
//echo count($sampleArray);
//echo '<br>';
//echo sizeof($sampleArray);
//echo '<br>';
//echo $sampleArray[4];


$car = ["year"=>"1398","color"=>"red","KM"=>'300000',"brand"=>"pride"];

//
//$year = $car['year'];
//echo $year;

$car[]  = '4 tier';
$car[]  = '2 tier';
$car['sunroof'] = true;
$car[] = 'back truck';


echo '<pre>';
print_r($car);
echo '</pre>';
//
//unset($car[0],$car[1],$car[2]);
//
//echo '<pre>';
//print_r($car);
//echo '</pre>';

//array_splice($car,3,2);
//
//echo '<pre>';
//print_r($car);
//echo '</pre>';

for ($i=0;$i<count($sampleArray);$i++)
{
    echo $sampleArray[$i].'<br>';
}

echo '<hr >';

foreach ($car as $itemName=>$carItem)
{
    echo $itemName.':'.$carItem.'<br >';
}

$cars = [
    '207'=>[
        'color'=>'black',
        'year'=>'1400',
        'sunroof'=>true
    ],
    'dena'=>[
        'color'=>'red',
        'year'=>'1401',
        'sunroof'=>false
    ]
];

echo '<pre>';
print_r($cars);
echo '</pre>';

foreach ($cars as $parent_key=>$carsItem)
{
    foreach($carsItem as $child_key=>$carsSubItem) {
       echo $parent_key.':'.$child_key.'=>'.$carsSubItem.'<br>';
    }
}