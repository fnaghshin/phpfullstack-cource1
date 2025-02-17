<?php


class class_a{
//    public function calc($num1,$num2)
//    {
//        return $this->checkNum($num1) + $this->checkNum($num2);
//    }

    public static function calc($num1,$num2)
    {
        return self::checkNum($num1) + self::checkNum($num2);
    }


    public static function checkNum($num)
    {
        return (int)$num;
    }
}


class class_b extends class_a {

    public static function minus($num1,$num2)
    {
        return parent::checkNum($num1) - parent::checkNum($num2);
    }

}

class class_c{
    public static function pow($num1,$num2)
    {
        return class_a::checkNum($num1) ** class_a::checkNum($num2);
    }
}
//$classA = new class_a();
//echo $classA->calc(20,30);
//echo '<hr />';
//echo class_a::calc(40,40);
//echo class_b::minus(30,10);
echo class_c::pow(2,10);