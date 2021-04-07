<?php
function is_disvisbile($n, $x, $y): bool
{
    if ($n % $x === 0 && $n % $y === 0) {
        return true;
    } else {
        return false;
    }
}

echo is_disvisbile(4, 2, 10);
