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
}
