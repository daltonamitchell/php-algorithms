<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
* Write a method that takes in a string. Return the longest word in
* the string.
*/

class LongestWordSpec extends ObjectBehavior
{
    function it_handles_a_simple_string()
    {
        $this->longest("short longest")->shouldReturn("longest");
    }

    function it_handles_only_one_word()
    {
        $this->longest("one")->shouldReturn("one");
    }

    function it_handles_many_words()
    {
        $this->longest("is the loneliest number")->shouldReturn("loneliest");
    }

    function it_handles_punctuation()
    {
        $this->longest("Hi there, how are you?")->shouldReturn("there");
    }

    function it_returns_the_first_longest_if_more_than_one()
    {
        $this->longest("Four score and seven years ago...")->shouldReturn("score");
    }
}
