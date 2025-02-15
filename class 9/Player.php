<?php


class Player{

    protected $hp;
    protected $pow;
    protected $def;

    public function setHP($hp)
    {
        echo $hp.'<br>';
        $this->hp = $hp;
        echo $this->hp.'<br>';
    }

    public function setPOW($pow)
    {
        $this->pow = $pow;
    }

    public function setDEF($def)
    {
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

    public function calcDamage()
    {
        return ($this->pow * 2) * ( $this->def * 3);
    }

}

class Wizard extends Player
{
    protected $magic;


    public function setHP($hp)
    {
        echo $hp.'<br>';
        $this->hp = $hp * 2;
        echo $this->hp.'<br>';
    }
    public function setMAGIC($magic)
    {
        $this->magic = $magic;
    }

    public function getMAGIC()
    {
        return $this->magic;
    }

    public function calcDamage()
    {
        return ($this->pow * 1) * ( $this->def * 1) * $this->magic / 2;
    }

}

$player1 = new Player();
$player1->setHP(100);
$player1->setPOW(20);
$player1->setDEF(15);
$player2 = new Player();
$player2->setHP(80);
$player2->setPOW(10);
$player2->setDEF(40);

$wizard1 = new Wizard();
$wizard1->setHP(200);
$wizard1->setPOW(40);
$wizard1->setDEF(60);
$wizard1->setMAGIC(10);
//
//echo '<pre>';
//var_dump($player1);
//
//var_dump($player2);
//
//var_dump($wizard1);

echo 'Player 1 Damage : '. $player1->calcDamage();
echo '<br>';
echo 'Player 2 Damage : '.$player2->calcDamage();
echo '<br>';
echo 'Wizard Damage : '.$wizard1->calcDamage();
