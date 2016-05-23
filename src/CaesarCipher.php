<?php

class CaesarCipher
{
    public function encode($offset, $string)
    {
        $letters = str_split($string);

        $letters = array_map(function($letter) use ($offset) {
            $ascii = ord($letter);

            // Ignore non-letters
            if ($ascii < ord("a") || $ascii > ord("z")) return chr($ascii);

            $ascii += $offset;

            if ($ascii > ord("z")) $ascii -= 26;

            return chr($ascii);
        }, $letters);

        return join($letters);
    }
}
