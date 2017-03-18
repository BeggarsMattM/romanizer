<?php

namespace spec\Acme;

use Acme\ComplexRomanNumeral;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ComplexRomanNumeralSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('(IV)', 'n');
        $this->shouldHaveType(ComplexRomanNumeral::class);
    }
}
