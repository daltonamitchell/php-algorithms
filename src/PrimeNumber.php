<?php

/**
 * Is Prime?
 *
 * Write a method that takes in an integer (greater than one) and
 * returns true if it is prime; otherwise return false.
 *
 * nth Prime
 *
 * Write a method that returns the `n`th prime number. Recall that only
 * numbers greater than 1 can be prime.
 */

class PrimeNumber
{
    public function is_prime($number)
    {
        // 1 is not prime
        if ($number === 1) return false;

        // 2 & 3 are
        if ($number <= 3) return true;

        $i = 2;
        while ($i <= sqrt($number)) {
            // We can skip even nums after 2
            if (($i > 2) && ($i % 2 == 0)) {
                $i++;
                continue;
            }

            if ($number % $i === 0) return false;
            $i++;
        }

        return true;
    }

    public function nth_prime($nth)
    {
        $i = 1;
        $found = 0;

        while ($found < $nth) {
            $i++;
            if ($this->is_prime($i)) $found++;
        }

        return $i;
    }
}
