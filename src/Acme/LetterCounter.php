<?php

namespace Acme;

/**
 * Write a function, `letter_count(str)` that takes a string and
 * returns a hash mapping each letter to its frequency. Do not include
 * spaces.
 */

class LetterCounter
{
    public function countLetters($string)
    {
        $counts = [];

        $letters = str_split($string);
        $letters = array_filter($letters, function ($letter) {
            return !empty(trim($letter));
        });

        foreach ($letters as $letter) {
            $counts[$letter] = array_key_exists($letter, $counts) ? $counts[$letter] + 1 : 1;
        }

        return $counts;
    }
}
