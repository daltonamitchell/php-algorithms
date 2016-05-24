<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
* Return the factorial of the provided integer. If the integer is represented
* with the letter n, a factorial is the product of all positive integers less
* than or equal to n.
*
* Factorials are often represented with the shorthand notation n!
*
* For example: 5! = 1 * 2 * 3 * 4 * 5 = 120
*/

class FactorialSpec extends ObjectBehavior
{
    function it_returns_a_number()
    {
        $this->calculate(5)->shouldBeInteger();
    }

    function it_returns_1_for_0()
    {
        $this->calculate(0)->shouldReturn(1);
    }

    function it_returns_the_input_for_values_less_than_3()
    {
        $this->calculate(2)->shouldReturn(2);
    }

    function it_returns_24_for_4()
    {
        $this->calculate(4)->shouldReturn(24);
    }

    function it_returns_3628800_for_10()
    {
        $this->calculate(10)->shouldReturn(3628800);
    }

    function it_returns_2432902008176640000_for_20()
    {
        $this->calculate(20)->shouldReturn(2432902008176640000);
    }
}
