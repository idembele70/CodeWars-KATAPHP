<?php
function boolToWord($bool = false)
{
    if ($bool === false) {
        return 'No';
    } else {
        return
            'Yes';
    }
}

echo boolToWord();
