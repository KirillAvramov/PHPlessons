<?php

require_once 'Item.php';
require_once 'Bag.php';
require_once 'Shopping.php';
require_once 'Discount.php';
require_once 'View.php';


//chair: new Item(1, 'Chair', 100);
//table: new Item(2, 'Table', 250, 10);
//apple: new Item(3, 'Apple', 30);

$myBag = new Shopping();
$myBag->bag->addItem( new Item(1, 'Chair', 100), 2);
View::showBag($myBag);
echo PHP_EOL;
$myBag->bag->addItem(new Item(2, 'Table', 250, 10));
View::showBag($myBag);
View::showPrices($myBag);
View::showItemsCount($myBag);