<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class SampleClass{
    public $name;
    protected $age;
    private $gender;

    public function __construct()
    {
        echo 'Class Started';
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo '<br>Class Closed';
    }
}


$sampleClass = new SampleClass();

$sampleClass->set_name('Melorinet');
echo '<br>Name is : '.$sampleClass->get_name();