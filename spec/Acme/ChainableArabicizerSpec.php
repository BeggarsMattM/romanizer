<?php

namespace spec\Acme;

use Acme\ChainableArabicizer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChainableArabicizerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('I', 'n');
        $this->shouldHaveType(ChainableArabicizer::class);
    }

    function it_converts_I_to_1()
    {
        $this->beConstructedWith('I', 'n');
        $this->toArabic()->shouldReturn(1);
    }
}
