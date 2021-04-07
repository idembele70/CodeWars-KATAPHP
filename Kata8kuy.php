<?php
function centuryFromYear($year=1705): int{
    return round(ceil($year +99)/100);
}

echo centuryFromYear();