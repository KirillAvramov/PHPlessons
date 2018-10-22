<?php

require_once 'Item.php';
require_once 'Bag.php';

class Shopping
{
    /**
     * @var Bag $bag
     * @var Discount $discount
     */
    public $bag;
    public $discount;

    public function __construct(Bag $bag = null, Discount $discount = null)
    {
        isset($bag) ? $this->bag = $bag : $this->bag = new Bag();
        isset($discount) ? $this->discount = $discount : $this->discount = new Discount();
    }


    public function getPrice(): int
    {
        $price = 0;
        /**
         * @var Item $item
         */
        foreach ($this->bag->getItems() as &$item) {
            $price += $item['count']*$item['item']->getPrice();
        }
        return $price;
    }


    public function getDiscPrice(): int
    {
        $price = 0;
        /**
         * @var Item $item
         */
        foreach ($this->bag->getItems() as &$item) {
            $price += $item['count']*($item['item']->getPrice() - $item['item']->getPrice() *
                    ($item['item']->getDiscount() + $this->discount->getPersonDisc() + $this->discount->getForSaleDisc()) / 100);
        }
        return $price;
    }

}