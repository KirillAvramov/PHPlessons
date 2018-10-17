<?php

class Item
{
    public $id, $name, $price, $discount;

    public function __construct(int $id, string $name, int $price, int $discount = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }
}