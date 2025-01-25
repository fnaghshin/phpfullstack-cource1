<?php
$link = null;
require_once 'database_connect.php';

$user_username = 'melorinet6';
$user_password = 'melorinet3';

$sql_query = "SELECT `username` FROM `user` WHERE `username`='$user_username'";//

$result = $link->query($sql_query);

if($result->num_rows === 0) {
    $sql_query = "INSERT INTO 
            `user` 
            (`id`, 
             `username`, 
             `password`) 
            VALUES 
                (NULL, 
                 '$user_username', 
                 '$user_password')";


    if($link->query($sql_query))
    {
        echo 'user created';
    }else{
        echo 'something went wrong';
    }
}else{
    echo 'Username already exist';
}
$link->close();
