<?php

function firstEx (array $names, $text)
{
    $names = array_map(function ($str)
    {
        return $str = strtolower($str);
    }, $names);

    $count = 0;
    for ($x = 0; $x < count($names); $x++) {
        $count += substr_count($text, $names[$x]);
    }
    return $count;
}

function secondEx ($name, $text)
{
    $count = 0;

    for ($x = 0; $x < strlen($name); $x++) {
        if (stripos($name, $name[$x]) == $x)  $count += substr_count($text, $name[$x]);
            else continue;
    }
    return $count;
}

function thirdEx ($text) {
    if (strlen($text) > 50) $text = substr($text, 0, 47);
    else return $text;
    if ($text[46] == " ") {
        $text[46] = ".";
        return $text . "..";
    } else return $text . "...";
}

function forthEx ($text) {
    if (strlen($text) > 50) {
        if ("A" <= $text[47] && $text[47] >= "Z" || "a" <= $text[47] && $text[47] >= "z") {
        for ($x = 46; $x >= 0; $x--) {
            if ($text[$x] == " ") {
                $text = substr($text, 0, $x) . "...";
                break;
            }
            if ($x == 0) $text = null;
        }}
        return $text;
    }
    return $text;
}


