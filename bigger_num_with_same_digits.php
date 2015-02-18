<?php

function bigger_with_same_digits($num)
{
    // Split number into digits
    $num = array_map(function($digit) {
        return intval($digit);
    }, str_split(strval($num)));

    // Just return number if less that 2 digits
    if ( count($num) < 2 ) return intval(implode('', $num));

    foreach(range(count($num)-2,0) as $left) {
        foreach(range(count($num)-1,0) as $right) {
            if ( $num[$right] > $num[$left] ) {
                // Swap positions
                $temp = $num[$right];
                $num[$right] = $num[$left];
                $num[$left] = $temp;
                return intval(implode('', $num));
            }
        }
    }

    return intval(implode('',$num));
}

// Test
echo ( bigger_with_same_digits(38627)===38672 ) ? "Booyah, you passed!" : "Try again :(";
