<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


//if(شرط){
//    نتیجه
//}
//
//if(شرط){
//    نتیجه
//}else{
//    درست نبود
//}
//
//if(شرط){
//
//}elseif(شرط){
//
//}else{
//
//}

$number1 = 20;
$number2 = 20;

//if($number1 > $number2)
//{
//    echo 'Number 1 bigger than number 2';
//}

//
//if($number1 > $number2){
//    echo 'Number 1 bigger than number 2';
//}else{
//    echo 'maybe Number 2 bigger than number 1';
//}

//if($number1 > $number2){
//    echo 'Number 1 bigger than number 2';
//}elseif ($number2 > $number1){
//    echo 'Number 2 bigger than number 1';
//}else{
//    echo 'Number 1 equal Number 2';
//}

/*
 * بزرگتر
 * >
 * کوچکتر
 * <
 * بزرگتر مساوی
 * >=
 * کوچکتر مساوی
 * <=
 * برابر
 * ==
 * برابر مطلق
 * ===
 * مخالف
 * !=
 *  * مخالف مطلق
 * !==
 * آیا ست شده است ؟
 * isset(متغبر)
 * آیا خالی هست
 * empty()
 *
 *
 */


$number1 = 21;
$number2 = '21';

if($number1 !== $number2)
    echo '!=';
echo '<br />';
if(isset($_GET['fname']))
    echo 'hello '.$_GET['fname'];

echo '<br />';

if(isset($_GET['age']) && !empty($_GET['age']))
    echo 'Age : .'.$_GET['age'];

echo '<br />';
if(isset($_GET['age']) || empty($_GET['age']))
    echo 'Age > '.$_GET['age'];

echo '<br />';
echo (isset($_GET['fname']))?$_GET['fname']:'First Name Is Null';

echo '<br />';
var_dump(empty($_GET['age']));