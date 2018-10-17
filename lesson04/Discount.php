<?php

require 'Bag.php';

class Discount
{
    public function sale(int $discount, Bag $bag)
    {
        $bag->forSaleDisc = $discount;
    }

    public function person(int $discount, Bag $bag)
    {
        $bag->personDisc = $discount;
    }
}