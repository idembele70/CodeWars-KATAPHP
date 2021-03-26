<?php
function squareSum($number=[1,2]) : int{
    $sum = 0;
    for ($i=0; $i < sizeof($number) ; $i++) { 
        $sum +=  pow($number[$i],2);
    }
    return $sum ;
}



echo squareSum();