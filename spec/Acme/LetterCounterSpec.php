<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Write a function, `letter_count(str)` that takes a string and
 * returns a hash mapping each letter to its frequency. Do not include
 * spaces.
 */

class LetterCounterSpec extends ObjectBehavior
{
    function it_handles_a_simple_case()
    {
        $expected = [
            "c" => 1,
            "a" => 1,
            "t" => 1
        ];

        $this->countLetters("cat")->shouldReturn($expected);
    }

    function it_handles_multiples_of_the_same_letter()
    {
        $expected = [
            "m" => 1,
            "o" => 2,
            "n" => 1
        ];

        $this->countLetters("moon")->shouldReturn($expected);
    }

    function it_handles_a_multi_word_case()
    {
        $expected = [
            "c" => 1,
            "a" => 2,
            "t" => 1,
            "s" => 1,
            "r" => 1,
            "e" => 1,
            "f" => 1,
            "u" => 1,
            "n" => 1
        ];

        $this->countLetters("cats are fun")->shouldReturn($expected);
    }
}
