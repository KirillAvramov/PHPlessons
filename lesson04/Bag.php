<?php

require_once 'Item.php';

class Bag
{
    private $forSaleDisc = 0;
    private $personDisc = 0;
    private $items = array();

    public function __construct()
    {
    }

    public function showBag()
    {
        foreach ($this->getItems() as &$item) {
            echo "Name: {$item->getName()}     Price: {$item->getPrice()}     Price with discount: " .
                ($item->getPrice() - $item->getPrice() * ($item->getDiscount() + $this->getPersonDisc() + $this->getForSaleDisc()) / 100 ). PHP_EOL;
        }
    }

    public function addItem(Item $item, int $count = 1)
    {
        for ($i = 1; $i <= $count; $i++) {
            $this->items[] = $item;
        }
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
