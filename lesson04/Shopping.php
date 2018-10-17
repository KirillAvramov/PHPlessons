<?php

require_once 'Item.php';
require_once 'Bag.php';

class Shopping
{

    public static function getItemCount(Bag $bag)
    {
        return count($bag->getItems());
    }

    public static function showItemsCount(Bag $bag)
    {
        echo self::getItemCount($bag);
    }

    public static function getPrice(Bag $bag)
    {
        $price = 0;
        /**
         * @var Item $item
         */
        foreach ($bag->getItems() as &$item) {
            $price += $item->getPrice();
        }
        return $price;
    }

    public static function getDiscPrice(Bag $bag)
    {
        $price = 0;
        /**
         * @var Item $item
         */
        foreach ($bag->getItems() as &$item) {
            $price += $item->getPrice() - $item->getPrice() * ($item->getDiscount() + $bag->getPersonDisc() + $bag->getForSaleDisc()) / 100;
        }
        return $price;
    }

    public static function showPrices(Bag $bag)
    {
        echo 'Price: ' . self::getPrice($bag) . '     Price with discount: ' . self::getDiscPrice($bag) . PHP_EOL;
    }
}