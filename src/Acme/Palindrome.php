<?php

namespace Acme;

/**
* Write a method that takes in a string of lowercase letters (no
* uppercase letters, no repeats). Consider the *substrings* of the
* string: consecutive sequences of letters contained inside the string.
* Find the longest such string of letters that is a palindrome.
*
* Note that the entire string may itself be a palindrome.
*/

class Palindrome
{
    public function isPalindrome($string)
    {
        if (strlen($string) === 1) {
            return true;
        }

        return $string === strrev($string);
    }

    public function longestPalindrome($string)
    {
        if ($this->isPalindrome($string)) {
            return $string;
        }

        $search_length = strlen($string) - 2;
        while ($search_length > 0) {
            $i = 0;
            while (($i + $search_length) < strlen($string)) {
                $sub = substr($string, $i, $search_length);
                if ($this->isPalindrome($sub)) {
                    return $sub;
                }
                $i++;
            }

            $search_length--;
        }

        return null;
    }
}
