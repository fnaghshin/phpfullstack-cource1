<?php

if(isset($_POST['username'])) {

    $_username = $_POST['username'];
    $_password = $_POST['password'];
    $_status = $_POST['status'];
    $_id = $_POST['id'];

    $link = null;
    require_once 'database_connect.php';

    $sql_query = "UPDATE `user` SET `username`='$_username' , `password`='$_password',`status`='$_status' WHERE `id`='$_id' LIMIT 1";

    $result = $link->query($sql_query);

    echo "updated <a href='database_show.php?id=$_id'>Back</a>";
}