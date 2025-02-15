<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class MyDB{

    private $DBNAME;
    private $server;
    private $username;
    private $password;

    private $LINK;

    public function __construct($DBNAME,$username,$password,$server='127.0.0.1')
    {
        $this->DBNAME = $DBNAME;
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        $this->LINK = new mysqli($this->server,$this->username,$this->password,$this->DBNAME,3306);

        if($this->LINK->connect_error) {
            return null;
        }else{
            return $this->LINK;
        }
    }

    public function runQuery($sql_query)
    {
        $result = $this->LINK->query($sql_query);
        return $result;
    }

}

$MyDB = new MyDB('phpcourse','root','mysql');

$link = $MyDB->connect();

$res = $MyDB->runQuery("SELECT * FROM `user`  ORDER BY `id` DESC ");

echo '<pre>';
print_r($res->fetch_assoc());


// CURD = Create , Update , Read , Delete