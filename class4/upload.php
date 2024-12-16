<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$file = $_FILES['image'];
//if($file['name'] != null)
//{
//
//    $path = 'images/'.rand().$file['name'];
//    move_uploaded_file($file['tmp_name'],$path);
//}
$valid_types =  [
    'image/jpeg',
    'image/jpg',
    'image/png',
    'image/webp'
];



//echo ($file['size'] / (1024 * 1024)).'M<br>';

$extention = explode('.',strtolower($file['name']));
$file_extention = $extention[(count($extention) - 1)];

if($file['name'] != null)
{
    $checkImage = getimagesize($file['tmp_name']);
    if($checkImage !== false)
    {
        if(in_array($checkImage['mime'],$valid_types))
        {
            if($file['size'] < (1 * 1024 * 1024)) {
                $path = 'images/'.rand().'.'.$file_extention;
                move_uploaded_file($file['tmp_name'],$path);
            }else{
                echo 'Size Error';
            }
        }else{
            echo 'Invalid mime type';
        }

    }else{
        echo 'Invalid File';
    }



    $path = 'images/'.rand().$file['name'];
//    move_uploaded_file($file['tmp_name'],$path);
}