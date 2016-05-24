<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Write a function, `nearest_larger(arr, i)` which takes an array and an
 * index.  The function should return another index, `j`: this should
 * satisfy:
 *
 * (a) `arr[i] < arr[j]`, AND
 * (b) there is no `j2` closer to `i` than `j` where `arr[i] < arr[j2]`.
 *
 * In case of ties (see example below), choose the earliest (left-most)
 * of the two indices. If no number in `arr` is larger than `arr[i]`,
 * return `nil`.
 */

class NearestLargerSpec extends ObjectBehavior
{
    function it_handles_a_simple_case_to_the_right()
    {
      $this->beConstructedWith([2,3,4,8]);
      $this->find(2)->shouldReturn(3);
    }

    function it_handles_a_simple_case_to_the_left()
    {
      $this->beConstructedWith([2,8,4,3]);
      $this->find(2)->shouldReturn(1);
    }

    function it_treats_any_two_larger_numbers_like_a_tie()
    {
      $this->beConstructedWith([2,6,4,8]);
      $this->find(2)->shouldReturn(1);
    }

    function it_should_choose_the_left_case_in_a_tie()
    {
        $this->beConstructedWith([2,6,4,6]);
        $this->find(2)->shouldReturn(1);
    }

    function it_finds_an_answer_with_a_distance_greater_than_1_to_the_left()
    {
        $this->beConstructedWith([8,2,4,3]);
        $this->find(2)->shouldReturn(0);
    }

    function it_finds_an_answer_with_a_distance_greater_than_1_to_the_right()
    {
        $this->beConstructedWith([2,4,3,8]);
        $this->find(1)->shouldReturn(3);
    }

    function it_should_return_null_if_no_larger_number_is_found()
    {
        $this->beConstructedWith([2, 6, 4, 8]);
        $this->find(3)->shouldReturn(null);
    }

    function it_should_return_the_nearer_of_2_greater_numbers()
    {
        $this->beConstructedWith([2, 6, 9, 4, 8]);
        $this->find(3)->shouldReturn(2);
    }
}
