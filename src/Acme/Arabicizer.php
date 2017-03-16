<?php

namespace Acme;

class Arabicizer
{
    public function toArabic($n)
    {
        $trans = array_flip([
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
        ]);

        if (strlen($n) === 0) return 0;
        if (strlen($n) === 1) return $trans[$n];

        $firstTwoChars = substr($n, 0, 2);
        if (array_key_exists($firstTwoChars, $trans)) {
          $tail = substr($n, 2);
          return $trans[$firstTwoChars] + $this->toArabic($tail);
        }

        $head = $n[0];
        $tail = substr($n, 1);

        return $trans[$head] + $this->toArabic($tail);
    }
}
