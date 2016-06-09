<?php

namespace Acme;

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
    public function isPrime($number)
    {
        // 1 is not prime
        if ($number === 1) {
            return false;
        }

        // 2 & 3 are
        if ($number <= 3) {
            return true;
        }

        $i = 1;
        while ($i <= sqrt($number)) {
            $i++;
            if ($this->evenAboveTwo($i)) {
                continue;
            }

            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }

    public function nthPrime($nth)
    {
        $i = 1;
        $found = 0;

        while ($found < $nth) {
            $i++;
            if ($this->evenAboveTwo($i)) {
                continue;
            }

            if ($this->isPrime($i)) {
                $found++;
            }
        }

        return $i;
    }

    private function evenAboveTwo($num)
    {
        return ($num > 2) && !boolval($num & 1);
    }
}
