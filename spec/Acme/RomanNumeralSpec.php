<?php

namespace spec\Acme;

use Acme\RomanNumeral;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('I', 'n');
        $this->shouldHaveType(RomanNumeral::class);
    }

    function it_converts_I_to_1()
    {
        $this->beConstructedWith('I', 'n');
        $this->translate()->shouldReturn(1);
    }

    function it_converts_II_to_2()
    {
      $this->beConstructedWith('II', 'n');
      $this->translate()->shouldReturn(2);
    }

    function it_converts_III_to_3()
    {
      $this->beConstructedWith('III', 'n');
      $this->translate()->shouldReturn(3);
    }

    function it_converts_IV_to_4()
    {
      $this->beConstructedWith('IV', 'n');
      $this->translate()->shouldReturn(4);
    }

    function it_converts_V_to_5()
    {
      $this->beConstructedWith('V', 'n');
      $this->translate()->shouldReturn(5);
    }

    function it_converts_VI_to_6()
    {
      $this->beConstructedWith('VI', 'n');
      $this->translate()->shouldReturn(6);
    }

    function it_converts_VIII_to_8()
    {
      $this->beConstructedWith('VIII', 'n');
      $this->translate()->shouldReturn(8);
    }

    function it_converts_IX_to_9()
    {
      $this->beConstructedWith('IX', 'n');
      $this->translate()->shouldReturn(9);
    }

    function it_converts_X_to_10()
    {
      $this->beConstructedWith('X', 'n');
      $this->translate()->shouldReturn(10);
    }

    function it_converts_XXXVII_to_37()
    {
      $this->beConstructedWith('XXXVII', 'n');
      $this->translate()->shouldReturn(37);
    }

    function it_converts_L_to_50()
    {
      $this->beConstructedWith('L', 'n');
      $this->translate()->shouldReturn(50);
    }

    function it_converts_MCMXCIX_to_1999()
    {
      $this->beConstructedWith('MCMXCIX', 'n');
      $this->translate()->shouldReturn(1999);
    }

    function it_converts_MMMCDLVI_to_3456()
    {
      $this->beConstructedWith('MMMCDLVI', 'n');
      $this->translate()->shouldReturn(3456);
    }

    function it_converts_overlined_IV_to_4000()
    {
      $this->toBiggerArabic("(IV)")->shouldReturn(4000);
    }

    function it_doesnt_get_confused_by_numbers_under_4000()
    {
      $this->toBiggerArabic("MMMCDLVI")->shouldReturn(3456);
    }

    function it_converts_complex_numbers()
    {
      $this->toBiggerArabic("((CXXIII))(CXXIV)CXXV")->shouldReturn(123124125);
    }


}
