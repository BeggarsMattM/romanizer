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

  private function isZero()
  {
    return $this->n === 0;
  }

  private function isSingleChar()
  {
    return strlen($this->n) === 1;
  }

  private function translateChar()
  {
    return $this->trans[$this->n];
  }

  private function take($n)
  {
    return substr($this->n, 0, $n);
  }

  private function drop($n)
  {
    return substr($this->n, $n);
  }

  private function isValidDigraph($twoChars)
  {
    return array_key_exists($twoChars, $this->trans);
  }

  public function toArabic()
  {
      if ( $this->isZero() ) return 0;
      if ( $this->isSingleChar() ) return $this->translateChar();

      $firstTwoChars = $this->take(2);

      if ( $this->isValidDigraph($firstTwoChars) ) {
        $tail = $this->drop(2);
        return $this->trans[$firstTwoChars] + $this->toArabic($tail);
      }

      $head = $this->take(1);
      return $this->trans[$head] + $this->toArabic($tail);
  }
}
