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
}
