<?php

/**
 * Write a method that takes in an integer `offset` and a string.
 * Produce a new string, where each letter is shifted by `offset`. You
 * may assume that the string contains only lowercase letters and
 * spaces.
 *
 * When shifting "z" by three letters, wrap around to the front of the
 * alphabet to produce the letter "c".
 *
 * You'll want to use String's `ord` method and Integer's `chr` method.
 * `ord` converts a letter to an ASCII number code. `chr` converts an
 * ASCII number code to a letter.
 *
 * You may look at the ASCII printable characters chart:
 *
 *     http://en.wikipedia.org/wiki/ASCII#ASCII_printable_characters
 *
 * Notice that the letter 'a' has code 97, 'b' has code 98, etc., up to
 * 'z' having code 122.
 */

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

    function it_converts_a_complex_string()
    {
        $this->encode(5, "the quick brown fox jumps over the lazy dog")->shouldReturn("ymj vznhp gwtbs ktc ozrux tajw ymj qfed itl");
    }
}
