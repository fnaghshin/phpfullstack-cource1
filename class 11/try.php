<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$totalTry = 0;
function getUrlInfo($url)
{
    try {
        $data = @file_get_contents($url);
        if(!$data)
        {
            throw new Exception('url not valid @!');
        }else{
            echo $data;
        }
    }catch (Exception $e){
        echo $e.'<br />';
        global $totalTry;
        $totalTry++;
        if($totalTry <= 3) {
            getUrlInfo($url);
        }
    }
}

getUrlInfo('https://melorinet.com');
//
//try {
//    $data = file_get_contents('https://melorinet.com');
//    echo $data;
//
//}catch (Exception $e){
//    file_put_contents('testfile2.txt','');
//    print_r($e);
//}