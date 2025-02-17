<?php

interface payment
{
    public function setSettle();
    public function verifyPayment();

    public function setMerch();
}

class MelorinetPayment implements payment{

}


class MyPayment extends MelorinetPayment{
    public function setSettle()
    {

    }
    public function verifyPayment(){

    }

    public function setMerch(){

    }
}