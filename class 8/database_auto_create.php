<?php


$link = null;
require_once 'database_connect.php';


for($i=100;$i<=300;$i++) {

    $_uname = 'Melorinet'.$i;
    $_upass = 'Melorinet'.$i;
    $sql_query = "INSERT INTO `user` SET `username`='$_uname' ,`password`='$_upass', `status`='1'";
    echo $sql_query;
    $result = $link->query($sql_query);

}