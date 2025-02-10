<?php
if(isset($_GET['id'])) {

    $_id = $_GET['id'];

    $link = null;
    require_once 'database_connect.php';

    $sql_query = "DELETE FROM `user` WHERE `id`='$_id' LIMIT 1";

    $result = $link->query($sql_query);

    echo "deleted <a href='database_select.php'>Back</a>";
}