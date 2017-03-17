<?php

namespace Acme;

class ChainableArabicizer
{
  private $n;
  private $trans;

  public function __construct($n)
  {
    $this->n = $n;
    $this->trans = [
      'M'  => 1000,
      'CM' => 900,
      'D'  => 500,
      'CD' => 400,
      'C'  => 100,
      'XC' => 90,
      'L'  => 50,
      'XL' => 40,
      'X'  => 10,
      'IX' => 9,
      'V'  => 5,
      'IV' => 4,
      'I'  => 1
    ];
  }

    public function toArabic()
    {
        if (strlen($this->n) === 0) return 0;
        if (strlen($this->n) === 1) return $this->trans[$this->n];

        $firstTwoChars = substr($this->n, 0, 2);
        if (array_key_exists($firstTwoChars, $this->trans)) {
          $tail = substr($this->n, 2);
          return $this->trans[$firstTwoChars] + $this->toArabic($tail);
        }

        $head = $this->n[0];
        $tail = substr($this->n, 1);

        return $this->trans[$head] + $this->toArabic($tail);
    }
}
