<?php 
function sum($carry,$item)
{
    $carry += $item;
    return $carry;
}

sum(12,3);
$a = [-1,4,2] ;

$o = (array_sum(array_filter($a, function($v){return $v > 0;})));

echo $o ;