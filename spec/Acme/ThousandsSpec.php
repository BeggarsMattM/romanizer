<?php

namespace spec\Acme;

use Acme\Thousands;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThousandsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Thousands::class);
    }
}
