<?php


class Players
{
    protected $hp;
    protected $pow;
    protected $def;

    public function __construct($hp,$pow,$def)
    {
        $this->hp = $hp;
        $this->pow = $pow;
        $this->def = $def;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function getPOW()
    {
        return $this->pow;
    }

    public function getDEF()
    {
        return $this->def;
    }

}

$players = new Players(100,20,70);

echo '<pre>';
var_dump($players);