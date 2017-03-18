<?php

namespace spec\Acme;

use Acme\PowersOfThousands;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PowersOfThousandsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PowersOfThousands::class);
    }

    function it_converts_numbers_smaller_than_1000()
    {
      $this->convert(123)
        ->romanize()->get()
        ->shouldHaveKeyWithValue(0, 123);
    }

    function it_converts_numbers_larger_than_1000()
    {
      $this->convert(123123)
        ->romanize()->get()
        ->shouldReturn([
          1 => 123,
          0 => 123
        ]);
    }

    function it_converts_even_larger_numbers()
    {
      $this->convert(123456789)
        ->romanize()->get()
        ->shouldReturn([
          2 => 123,
          1 => 456,
          0 => 789
        ]);
    }

    function it_treats_numbers_smaller_than_4000_correctly()
    {
      $this->convert(3999100)
        ->romanize()->get()
        ->shouldReturn([
          1 => 3999,
          0 => 100
        ]);
    }
}
