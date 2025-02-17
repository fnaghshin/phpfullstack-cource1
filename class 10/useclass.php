<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use melorinet\nameclass\nameclass;

class useclass extends nameclass{

    public function echoUrl()
    {
        echo $this->getUrl();
    }
}

$useclass = new useclass();
$useclass->echoUrl();