<?php

/**
 * Write a method that takes in a string. Return the longest word in
 * the string.
 */

class LongestWord
{
    public function longest($string)
    {
        $words = explode(" ", $string);

        if (count($words) === 1) {
            return $words[0];
        }

        $longest = "";

        foreach ($words as $word) {
            preg_match("/[a-z0-9]*/i", $word, $cleaned); // Only want alphanumeric chars
            if (strlen($cleaned[0]) > strlen($longest)) {
                $longest = $cleaned[0];
            }
        }

        return $longest;
    }
}
