<?php


class classParent
{
    public $name_pub;
    protected $name_prot;
    private $name_priv;

    const parent_const = 'evry';

    public function func_pub()
    {

    }

    protected function func_prot()
    {

    }

    private function func_priv()
    {

    }
}

class classChild extends classParent
{

    const child_const = 'child';
    public function __construct()
    {
        //        parent::
        //        self::
    }
}

$classParent = new classParent();
$classParent->name_pub;
