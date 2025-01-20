<?php

$title = $_POST['title'];
$text = $_POST['text'];


$insertData[] = [
    'title'=>$title,
    'text'=>$text,
];

$oldData = file_get_contents('db.txt');

if($oldData == '') {
    $saveData = json_encode($insertData);
    file_put_contents('db.txt', $saveData);
}else{
    $oldData_array = json_decode($oldData,true);
    $saveData_array = array_merge($oldData_array,$insertData);
    $saveData = json_encode($saveData_array);
    file_put_contents('db.txt',$saveData);
}
