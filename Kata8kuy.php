<?php
function solution($a=['a', 'b', 'c', 'd', 'e', "f"],$x="a"){
    foreach ($a as $value) {
        if ($value === $x) return true;
    }
    return false;
}

echo solution();