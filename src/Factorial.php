<?php

class Factorial
{
    public function calculate($number)
    {
        if ($number === 0) return 1;

        if ($number < 3) return $number;

        $factorial = 1;
        $i = 1;

        while ($i <= $number) {
            $factorial *= $i;
            $i++;
        }

        return $factorial;
    }
}
