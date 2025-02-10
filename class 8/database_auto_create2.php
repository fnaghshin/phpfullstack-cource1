<?php


for($i=1;$i<=300;$i++) {

    $_uname = 'Melorinet'.$i;
    $_upass = 'Melorinet'.$i;
    $sql_query_values .= "(NULL, 
                 '$_uname', 
                 '$_upass'),";

}

$link = null;
require_once 'database_connect.php';

$sql_query_values = rtrim($sql_query_values,',');

$sql_query = "INSERT INTO 
            `user` 
            (`id`, 
             `username`, 
             `password`) 
            VALUES 
                $sql_query_values";

$link->query($sql_query);


