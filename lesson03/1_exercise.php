<?php

//1 ex
function normalDate($date)
{
    $date = date_create_from_format('Y-m-d H:i:s', $date);
    return date_format($date, 'd.m.Y, H:i:s');
}

echo normalDate('2018-09-17 14:05:59') . PHP_EOL;

//-------------------
$birthday = date_create_from_format('d.m.Y', '23.12.1998');
$current = date_create();
$diff = $current->diff($birthday);
$months = $diff->m + $diff->y * 12;
$hours = $diff->h + $diff->days * 24;
$minutes = $hours * 60 + $diff->i;
$seconds = $minutes * 60 + $diff->s;
echo $diff->format('кол-во лет: %y' . "\n" . 'кол-во месяцев: ' . $months . "\n" . 'кол-во дней: %a' . "\n" .
    'кол-во часов: ' . $hours . "\n" . 'кол-во минут: ' . $minutes . "\n" . 'кол-во секунд: ' . $seconds . "\n");
//---------------------

//3 ex
/**
 * @param string $date in format 'd.m.Y, H:i:s'
 */
function when($date)
{
    $date = date_create_from_format('d.m.Y, H:i:s', $date);
    $current = date_create();
    $diff = $current->diff($date);
    if ($diff->y > 0) {
        echo $diff->y . ' лет назад' . "\n";
    } elseif ($diff->m > 0) {
        echo $diff->m . ' месяцев назад' . "\n";
    } elseif ($diff->d > 1) {
        echo $diff->d . ' дней назад' . "\n";
    } elseif ($diff->d == 1) {
        echo 'вчера' . "\n";
    } elseif ($diff->h > 0) {
        echo $diff->h . ' часов назад' . "\n";
    } elseif ($diff->i > 0) {
        echo $diff->i . ' минут назад' . "\n";
    } else echo 'только что' . "\n";
}

when('08.10.2018, 13:42:00');