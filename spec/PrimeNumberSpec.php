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
        $this->is_prime(1)->shouldBe(false);
    }

    function it_returns_true_for_2_or_3()
    {
        $this->is_prime(2)->shouldBe(true);
        $this->is_prime(3)->shouldBe(true);
    }

    function it_handles_other_examples()
    {
        $this->is_prime(4)->shouldBe(false);
        $this->is_prime(9)->shouldBe(false);
        $this->is_prime(17)->shouldBe(true);
        $this->is_prime(100)->shouldBe(false);
    }

    function it_finds_the_1st_prime_number()
    {
        $this->nth_prime(1)->shouldBe(2);
    }

    function it_finds_the_2nd_prime_number()
    {
        $this->nth_prime(2)->shouldBe(3);
    }

    function it_finds_prime_numbers_3_thru_5()
    {
        $this->nth_prime(3)->shouldBe(5);
        $this->nth_prime(4)->shouldBe(7);
        $this->nth_prime(5)->shouldBe(11);
    }
}
