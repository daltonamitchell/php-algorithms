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

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeNumberSpec extends ObjectBehavior
{
    function it_returns_false_for_1()
    {
        $this->isPrime(1)->shouldBe(false);
    }

    function it_returns_true_for_2_or_3()
    {
        $this->isPrime(2)->shouldBe(true);
        $this->isPrime(3)->shouldBe(true);
    }

    function it_handles_other_examples()
    {
        $this->isPrime(4)->shouldBe(false);
        $this->isPrime(9)->shouldBe(false);
        $this->isPrime(17)->shouldBe(true);
        $this->isPrime(100)->shouldBe(false);
    }

    function it_finds_the_1st_prime_number()
    {
        $this->nthPrime(1)->shouldBe(2);
    }

    function it_finds_the_2nd_prime_number()
    {
        $this->nthPrime(2)->shouldBe(3);
    }

    function it_finds_prime_numbers_3_thru_5()
    {
        $this->nthPrime(3)->shouldBe(5);
        $this->nthPrime(4)->shouldBe(7);
        $this->nthPrime(5)->shouldBe(11);
    }
}
