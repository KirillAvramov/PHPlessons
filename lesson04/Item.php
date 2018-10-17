<?php

class Item
{
    private $id, $name, $price, $discount;

    public function __construct(int $id, string $name, int $price, int $discount = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}