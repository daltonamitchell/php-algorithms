<?php

namespace Acme;

/**
 * Build a function, `morse_encode(str)` that takes in a string (no
 * numbers or punctuation) and outputs the morse code for it. See
 * http://en.wikipedia.org/wiki/Morse_code. Put two spaces between
 * words and one space between letters.
 */

class MorseCode
{
    // @codingStandardsIgnoreStart
    public static function MORSE_CODE()
    {
        // @codingStandardsIgnoreEnd
        return [
            "a" => ".-",
            "b" => "-...",
            "c" => "-.-.",
            "d" => "-..",
            "e" => ".",
            "f" => "..-.",
            "g" => "--.",
            "h" => "....",
            "i" => "..",
            "j" => ".---",
            "k" => "-.-",
            "l" => ".-..",
            "m" => "--",
            "n" => "-.",
            "o" => "---",
            "p" => ".--.",
            "q" => "--.-",
            "r" => ".-.",
            "s" => "...",
            "t" => "-",
            "u" => "..-",
            "v" => "...-",
            "w" => ".--",
            "x" => "-..-",
            "y" => "-.--",
            "z" => "--.."
        ];
    }

    public function encode($string)
    {
        if (strlen($string) === 1) {
            return self::MORSE_CODE()[$string];
        }

        $words = explode(" ", $string);

        return join("  ", array_map([$this, 'encodeWord'], $words));
    }

    public function encodeWord($word)
    {
        $morse_code = self::MORSE_CODE();
        $letters = str_split($word);

        $letters = array_map(
            function ($letter) use ($morse_code) {
                return array_key_exists($letter, $morse_code) ? $morse_code[$letter] : $letter;
            },
            $letters
        );

        return join(" ", $letters);
    }
}
