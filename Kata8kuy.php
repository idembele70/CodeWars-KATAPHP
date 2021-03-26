<?php
// function squareSum($numbers=[1,2]) : int{
    $numbers=[1,2];
   echo array_reduce($numbers, function($carry, $index){
    $carry += $index * $index;
   });
//    return 10;
// }



// echo squareSum();