<?php 
function no_space(string $s="jojl 12"): string {
    return str_replace(' ','',$s);
}

echo no_space();