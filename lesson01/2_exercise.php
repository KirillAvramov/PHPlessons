<?php
$numbers = array(1, 2, 3, 4, 5);
//1 задание
$comp = array_reduce($numbers, function ($v, $w)
{
    $v *= $w;
    return $v;
}, 1);
echo $comp.PHP_EOL;

//2 задание
$even = array_filter($numbers, function ($x)
{
    return (!($x & 1));
});
print_r($even);

//3 задание
$square = array_map(function ($x)
{
    return $x * $x;
}, $numbers);
print_r($square);