<?php

require_once 'Bag.php';

class Discount
{
    public function sale(int $disc, Bag $bag)
    {
        $bag->setSaleDisc($disc);
    }

    public function person(int $disc, Bag $bag)
    {
        $bag->setPersonDisc($disc);
    }
}