<?php

class Palindrome
{
    public function is_palindrome($string)
    {
        if (strlen($string) === 1) return true;

        return $string === strrev($string);
    }

    public function longest_palindrome($string)
    {
        if ($this->is_palindrome($string)) return $string;

        $search_length = strlen($string) - 2;
        while ($search_length > 0) {

            $i = 0;
            while (($i + $search_length) < strlen($string)) {
                $sub = substr($string, $i, $search_length);
                if ($this->is_palindrome($sub)) return $sub;
                $i++;
            }

            $search_length--;
        }

        return null;
    }
}
