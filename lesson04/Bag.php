<?php

require_once 'Item.php';

class Bag
{

    private $items = array();

    public function __construct()
    {
    }

    public function addItem(Item $item, int $count = 1)
    {
        if (!isset($this->items)) {
            $this->items[] = ['item' => $item, 'count' => $count];
        }

        foreach ($this->getItems() as &$select) {
            if ($select['item']->getId() == $item->getId()) {
                $select['count'] += $count;
                return;
            }
        }

        $this->items[] = ['item' => $item, 'count' => $count];
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    public function getItemsCount(): int
    {
        $count = 0;
        foreach ($this->getItems() as &$item) {
            $count += $item['count'];
        }
        return $count;
    }

}
