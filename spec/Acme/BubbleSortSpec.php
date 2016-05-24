<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
* Write a function `bubble_sort(arr)` which will sort an array of
* integers using the "bubble sort"
* methodology. (http://en.wikipedia.org/wiki/Bubble_sort)
*/

class BubbleSortSpec extends ObjectBehavior
{
    function it_works_with_an_empty_array()
    {
        $this->sort([])->shouldReturn([]);
    }

    function it_works_with_an_array_of_1_item()
    {
        $this->sort([1])->shouldReturn([1]);
    }

    function it_sorts_a_small_array_of_numbers()
    {
        $this->sort([5, 4, 3, 2, 1])->shouldReturn([1, 2, 3, 4, 5]);
    }

    function it_sorts_a_larger_array()
    {
        $this->sort([9, 10, 3, 1, 4, 17, 23, 12, 25, 6])->shouldReturn([1, 3, 4, 6, 9, 10, 12, 17, 23, 25]);
    }
}
