<?php 
function solution($str="world"){
    $strSplited =str_split($str,1) ;
    $reversed ='';
    for ($i=strlen($str)-1; $i >= 0  ; $i--) { 
        $reversed .= $strSplited[$i];
    }
    return $reversed;
}

echo solution();