<?php
function is_disvisbile($n, $x, $y) : bool{
  return $n % $x === 0 && $n % $y === 0 ? true : false;
  
}

echo is_disvisbile(4,2,10);