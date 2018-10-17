<?php

require 'Bag.php';

interface dbInteraction
{
    public static function import($db);

    public static function export(Bag $bag, $db);
}