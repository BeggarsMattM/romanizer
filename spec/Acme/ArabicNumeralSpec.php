<?php

namespace spec\Acme;

use Acme\ArabicNumeral;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArabicNumeralSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(1, 'n');
        $this->shouldHaveType(ArabicNumeral::class);
    }

    function it_throws_an_exception_for_0()
    {
      $this->beConstructedWith(0, 'n');
      $this->shouldThrow('\Exception')->duringInstantiation();
    }

    function it_converts_1_to_I()
    {
      $this->beConstructedWith(1, 'n');
      $this->translate()->shouldReturn("I");
    }

    function it_converts_2_to_II()
    {
      $this->beConstructedWith(2, 'n');
      $this->translate()->shouldReturn("II");
    }

    function it_converts_3_to_III()
    {
      $this->beConstructedWith(3, 'n');
      $this->translate()->shouldReturn("III");
    }

    function it_converts_4_to_IV()
    {
      $this->beConstructedWith(4, 'n');
      $this->translate()->shouldReturn("IV");
    }

    function it_converts_5_to_V()
    {
      $this->beConstructedWith(5, 'n');
      $this->translate()->shouldReturn("V");
    }

    function it_converts_6_to_VI()
    {
      $this->beConstructedWith(6, 'n');
      $this->translate()->shouldReturn("VI");
    }

    function it_converts_8_to_VIII()
    {
      $this->beConstructedWith(8, 'n');
      $this->translate()->shouldReturn("VIII");
    }

    function it_converts_9_to_IX()
    {
      $this->beConstructedWith(9, 'n');
      $this->translate()->shouldReturn("IX");
    }

    function it_converts_10_to_X()
    {
      $this->beConstructedWith(10, 'n');
      $this->translate()->shouldReturn("X");
    }

    function it_converts_37_to_XXXVII()
    {
      $this->beConstructedWith(37, 'n');
      $this->translate()->shouldReturn("XXXVII");
    }

    function it_converts_50_to_L()
    {
      $this->beConstructedWith(50, 'n');
      $this->translate()->shouldReturn("L");
    }

    function it_converts_1999_to_MCMXCIX()
    {
      $this->beConstructedWith(1999, 'n');
      $this->translate()->shouldReturn("MCMXCIX");
    }

    function it_converts_3456_to_MMMCDLVI()
    {
      $this->beConstructedWith(3456, 'n');
      $this->translate()->shouldReturn("MMMCDLVI");
    }

    function it_converts_4000_to_overlined_IV()
    {
      $this->beConstructedWith(4000, 'n');
      $this->translate()->shouldReturn([
        1 => "IV",
        0 => ""
      ]);
    }

    function it_converts_a_nine_digit_number_predictably()
    {
      $this->beConstructedWith(123124125, 'n');
      $this->translate()->shouldReturn([
        2 => "CXXIII",
        1 => "CXXIV",
        0 => "CXXV"
      ]);
    }
}
