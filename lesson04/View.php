<?php

class View
{

    public static function showBag(Shopping $shop)
    {
        foreach ($shop->bag->getItems() as &$item) {
            echo "Name: {$item['item']->getName()}     Count: {$item['count']}     Price: {$item['item']->getPrice()}     Price with discount: " .
                ($item['item']->getPrice() - $item['item']->getPrice() *
                    ($item['item']->getDiscount() + $shop->discount->getPersonDisc() + $shop->discount->getForSaleDisc()) / 100) . PHP_EOL;
        }
    }

    public static function showPrices(Shopping $shop)
    {
        echo 'Price: ' . $shop->getPrice() . '     Price with discount: ' . $shop->getDiscPrice() . PHP_EOL;
    }

    public static function showItemsCount(Shopping $shop)
    {
        echo $shop->bag->getItemsCount() . PHP_EOL;
    }
}