<?php

/**
 * Return the factorial of the provided integer. If the integer is represented
 * with the letter n, a factorial is the product of all positive integers less
 * than or equal to n.
 *
 * Factorials are often represented with the shorthand notation n!
 *
 * For example: 5! = 1 * 2 * 3 * 4 * 5 = 120
 */

class Factorial
{
    public function calculate($number)
    {
        if ($number === 0) {
            return 1;
        }

        if ($number < 3) {
            return $number;
        }

        $factorial = 1;
        $i = 1;

        while ($i <= $number) {
            $factorial *= $i;
            $i++;
        }

        return $factorial;
    }
}
