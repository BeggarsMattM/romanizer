<?php

namespace Acme;

class Thousands
{
    public function convert($n)
    {
        $levels = floor(log10($n) / 3);

        while ($levels >= 0) {
          $thislevel = (int) floor($n / pow(1000, $levels));
          $result[$levels] = $thislevel;
          $n -= $thislevel * pow(1000, $levels);
          $levels -= 1;
        }
        return $result;
    }
}
