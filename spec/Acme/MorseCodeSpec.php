<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Build a function, `morse_encode(str)` that takes in a string (no
 * numbers or punctuation) and outputs the morse code for it. See
 * http://en.wikipedia.org/wiki/Morse_code. Put two spaces between
 * words and one space between letters.
 */

class MorseCodeSpec extends ObjectBehavior
{
    function it_encodes_a_simple_letter()
    {
        $this->encode("q")->shouldReturn("--.-");
    }

    function it_encodes_a_small_word()
    {
        $this->encode("cat")->shouldReturn("-.-. .- -");
    }

    function it_encodes_a_phrase()
    {
        $this->encode("cat in hat")->shouldReturn("-.-. .- -  .. -.  .... .- -");
    }
}
