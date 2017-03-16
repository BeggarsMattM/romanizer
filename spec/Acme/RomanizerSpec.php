<?php

namespace spec\Acme;

use Acme\Romanizer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanizerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Romanizer::class);
    }

    function it_throws_an_exception_for_0()
    {
      $this->shouldThrow('\Exception')->duringToRoman(0);
    }

    function it_converts_1_to_I()
    {
      $this->toRoman(1)->shouldReturn("I");
    }

    function it_converts_2_to_II()
    {
      $this->toRoman(2)->shouldReturn("II");
    }


    function it_converts_3_to_III()
    {
      $this->toRoman(3)->shouldReturn("III");
    }
}
