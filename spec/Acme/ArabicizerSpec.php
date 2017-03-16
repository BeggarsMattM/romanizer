<?php

namespace spec\Acme;

use Acme\Arabicizer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArabicizerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Arabicizer::class);
    }

    function it_converts_I_to_1()
    {
      $this->toArabic("I")->shouldReturn(1);
    }

    function it_converts_II_to_2()
    {
      $this->toArabic("II")->shouldReturn(2);
    }

    function it_converts_III_to_3()
    {
      $this->toArabic("III")->shouldReturn(3);
    }

    function it_converts_IV_to_4()
    {
      $this->toArabic("IV")->shouldReturn(4);
    }

    function it_converts_V_to_5()
    {
      $this->toArabic("V")->shouldReturn(5);
    }

    function it_converts_VI_to_6()
    {
      $this->toArabic("VI")->shouldReturn(6);
    }

    function it_converts_VIII_to_8()
    {
      $this->toArabic("VIII")->shouldReturn(8);
    }

    function it_converts_IX_to_9()
    {
      $this->toArabic("IX")->shouldReturn(9);
    }

    function it_converts_X_to_10()
    {
      $this->toArabic("X")->shouldReturn(10);
    }

    function it_converts_XXXVII_to_37()
    {
      $this->toArabic("XXXVII")->shouldReturn(37);
    }

    function it_converts_L_to_50()
    {
      $this->toArabic("L")->shouldReturn(50);
    }

    function it_converts_MCMXCIX_to_1999()
    {
      $this->toArabic("MCMXCIX")->shouldReturn(1999);
    }

    function it_converts_MMMCDLVI_to_3456()
    {
      $this->toArabic("MMMCDLVI")->shouldReturn(3456);
    }
}
