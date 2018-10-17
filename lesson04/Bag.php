<?php

require 'Item.php';

class Bag
{
    public $forSaleDisc = 0;
    public $personDisc = 0;
    public $items = array(Item::class);

    public function __construct()
    {
    }
}
