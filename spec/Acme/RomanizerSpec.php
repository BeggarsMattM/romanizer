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

    function it_converts_4_to_IV()
    {
      $this->toRoman(4)->shouldReturn("IV");
    }

    function it_converts_5_to_V()
    {
      $this->toRoman(5)->shouldReturn("V");
    }

    function it_converts_6_to_VI()
    {
      $this->toRoman(6)->shouldReturn("VI");
    }

    function it_converts_8_to_VIII()
    {
      $this->toRoman(8)->shouldReturn("VIII");
    }

    function it_converts_9_to_IX()
    {
      $this->toRoman(9)->shouldReturn("IX");
    }

    function it_converts_10_to_X()
    {
      $this->toRoman(10)->shouldReturn("X");
    }

    function it_converts_37_to_XXXVII()
    {
      $this->toRoman(37)->shouldReturn("XXXVII");
    }

    function it_converts_50_to_L()
    {
      $this->toRoman(50)->shouldReturn("L");
    }

    function it_converts_1999_to_MCMXCIX()
    {
      $this->toRoman(1999)->shouldReturn("MCMXCIX");
    }

    function it_converts_3456_to_MMMCDLVI()
    {
      $this->toRoman(3456)->shouldReturn("MMMCDLVI");
    }

    function it_converts_4000_to_overlined_IV()
    {
      $this->toBiggerRoman(4000)->shouldReturn([
        "1" => "IV"
      ]);
    }
}
