<?php
function collectRange($start, $end)
{
    $range = [];

    $num = $end - $start;

    for ($i = 0; $i <= $num; $i++) {
        $range[$i] = $start++;
    }
    return $range;
}

$range = collectRange(4, 10);

var_dump($range) . "<br>";

function getSum($array)
{
    $sum = 0;

    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}


echo getSum($range);
