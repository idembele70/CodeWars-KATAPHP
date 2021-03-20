<?php
function smallestInteger($arr=[3, 5, 10, 1, 4, 55]) : int {
    $min = $arr[0];
    foreach ($arr as $value) {
      $min > $value ? $min = $value : $min;
    }
    return $min;
}

echo smallestInteger();
