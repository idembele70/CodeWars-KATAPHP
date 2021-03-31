<?php
function squareSum($numbers): int
{
    $sum = null;
    if ($numbers != null) {
        for ($i=0; $i < sizeof($numbers); $i++) { 
          $sum +=  $numbers[$i] * $numbers[$i];
        }
    } else {
        $sum = 0;
    }
    return $sum;
}



echo squareSum([1, 2]);
echo squareSum([]);

/* 
function sum($carry, $index)
    {
        $carry += $index * $index;
        return $carry;
    }
   return $numbers != null ? array_reduce($numbers, "sum") : 0;
    */