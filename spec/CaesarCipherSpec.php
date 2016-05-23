<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CaesarCipherSpec extends ObjectBehavior
{
    function it_converts_a_single_letter()
    {
        $this->encode(2, "a")->shouldReturn("c");
    }

    function it_converts_a_simple_string()
    {
        $this->encode(3, "abc")->shouldReturn("def");
    }

    function it_converts_a_more_complex_string()
    {
        $this->encode(3, "abc xyz")->shouldReturn("def abc");
    }

}
