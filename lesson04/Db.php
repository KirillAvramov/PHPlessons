<?php

require 'interface.php';

class Db implements dbInteraction
{
    public static function import($db)
    {
        return new Bag();
    }

    public static function export(Bag $bag, $db)
    {
        return;
    }
}