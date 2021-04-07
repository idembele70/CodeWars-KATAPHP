<?php
function basicOp($op='+', $val1=4, $val2=5): int
{
{{    switch ($op) {
        case '+':
            $res = $val1 + $val2;
            break;
        case '-':
            $res = $val1 - $val2;
            break;
        case '*':
            $res = $val1 * $val2;
            break;
        case '/':
            $res = $val1 / $val2;
            break;

        default:
            "This operator doesn't exist !";
            break;
    }
    return $res;
}
}}
echo basicOp();