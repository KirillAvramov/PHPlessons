<?php

require_once 'Item.php';
require_once 'Bag.php';
require_once 'Shopping.php';
require_once 'Discount.php';


//chair: new Item(1, 'Chair', 100);
//table: new Item(2, 'Table', 250, 10);
//apple: new Item(3, 'Apple', 30);

$myBag = new Bag();
$myBag->addItem( new Item(1, 'Chair', 100), 2);
$myBag->showBag();
$myBag->addItem(new Item(2, 'Table', 250, 10));
Shopping::showPrices($myBag);
Shopping::showItemsCount($myBag);
