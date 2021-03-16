<?php 
function makeNegative(float $num)
{
    return $num <= 0 ? $num : -$num;
}

echo makeNegative(-12.98) ;