<?php

namespace Acme;

use Exception;

class ArabicNumeral
{
    private $n;
    private $trans = [
      1000 => 'M',
       900 => 'CM',
       500 => 'D',
       400 => 'CD',
       100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
         9 => 'IX',
         5 => 'V',
         4 => 'IV',
         1 => 'I'
    ];

    public function __construct($n)
    {
        $this->n = $n;
    }

    private function isInvalid()
    {
      return $this->n <= 0;
    }

    private function value()
    {
      return $this->trans[$this->n];
    }

    public function translate()
    {
        if ( self::isInvalid() ) throw new Exception('Unromanizable number');

        return $this->value();
    }
}
