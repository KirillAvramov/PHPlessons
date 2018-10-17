<?php

require 'Item.php';

class Bag
{
    private $forSaleDisc = 0;
    private $personDisc = 0;
    private $items = array(Item::class);

    public function __construct()
    {
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function setSaleDisc(int $disc)
    {
        $this->forSaleDisc = $disc;
    }

    public function setPersonDisc(int $disc)
    {
        $this->personDisc = $disc;
    }

    /**
     * @return int
     */
    public function getForSaleDisc(): int
    {
        return $this->forSaleDisc;
    }

    /**
     * @return int
     */
    public function getPersonDisc(): int
    {
        return $this->personDisc;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

}
