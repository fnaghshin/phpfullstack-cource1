<?php


//class versicle{
//    public $door;
//    public function set_door($door)
//    {
//        $this->door = $door;
//    }
//
//    public function get_door()
//    {
//        return $this->door;
//    }
//}
//
//class car extends versicle
//{
//
//}
//
//$car = new car();
//
//$car->set_door(4);
//
//echo $car->get_door();


interface car
{
    public function setColor($color);
}

class Pride implements car{

    public $color;
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$pride = new Pride();

$pride->setColor('red');
echo $pride->color;
echo '<br>';
echo $pride->door;
echo '<br>';
echo $pride->getColor();