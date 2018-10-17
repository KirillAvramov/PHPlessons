<?php

require 'Item.php';
require 'Bag.php';

class Shopping
{
    public static function showBag(Bag $bag)
    {
        foreach ($bag->getItems() as &$item) {
            echo "Name: {$item->name}     Price: {$item->price}     Price with discount: " .
                $item->price - $item->price * ($item->discount + $bag->getPersonDisc() + $bag->getForSaleDisc()) / 100 . PHP_EOL;
        }
    }

    public static function getItemCount(Bab $bag)
    {
        return count($bag->items);
    }

    public static function showItemsCount(Bag $bag)
    {
        echo self::getItemCount($bag);
    }

    public static function getPrice(Bag $bag)
    {
        $price = 0;
        foreach ($bag->getItems() as &$item) {
            $price += $item->price;
        }
        return $price;
    }

    public static function getDiscPrice(Bag $bag)
    {
        $price = 0;
        foreach ($bag->getItems() as &$item) {
            $price += $item->price - $item->price * ($item->discount + $bag->getPersonDisc() + $bag->getForSaleDisc()) / 100;
        }
        return $price;
    }

    public static function showPrices(Bag $bag)
    {
        echo 'Price: ' . self::getPrice($bag) . '     Price with discount: ' . self::getDiscPrice($bag) . PHP_EOL;
    }
}