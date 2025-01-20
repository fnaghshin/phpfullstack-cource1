<?php

if(isset($_GET['name']))
{
    setcookie('firstname',$_GET['name'],time()+(86),'/');
    setcookie('is_admin',0,time()+(86),'/');
    echo 'hello '.$_GET['name'].'<br>';
}



if(isset($_COOKIE['firstname']))
{
    echo 'hello '.$_COOKIE['firstname'];
}

if(isset($_GET['logout']))
{
    setcookie('is_admin','',time()-20000,'/');
}