<?php 
function no_space(string $s="jojl 12"): string {
    $newS = '';
    for ($i=0; $i <strlen($s) ; $i++)
       $newS .= ($s[$i] === ' ') ? '' : $s[$i];
    return $newS;
}

echo no_space();