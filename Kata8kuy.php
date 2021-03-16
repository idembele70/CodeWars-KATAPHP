<?php 
function removeChar(string $s ="eloquent") : string{
$sTab =  str_split($s); $news = null;
     foreach ($sTab as $key => $value) {
         if ($key == 0 || $key == strlen($s)-1);
         else $news .= $value;
     }
     return $news;
}
// order bypopularity

echo removeChar();