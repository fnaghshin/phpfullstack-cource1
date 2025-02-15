<?php


class SClass{

    const ITEMS = 'apple,banana';
    function getItems()
    {
        return explode(',',self::ITEMS);
    }

}

$sclass = new SClass();
echo '<pre>';
print_r($sclass->getItems());
echo '</pre>';
echo SClass::ITEMS;