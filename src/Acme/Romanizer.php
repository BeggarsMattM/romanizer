<?php

namespace Acme;

class Romanizer
{
    private $trans = [
      10 => 'X',
       9 => 'IX',
       5 => 'V',
       4 => 'IV',
       1 => 'I'
    ];

    public function toRoman($n)
    {
      if ($n <= 0) { throw new \Exception; }
      return $this->_toRoman($n);
    }

    public function _toRoman($n)
    {
        if ($n == 0) return "";

        foreach ($this->trans as $arabic => $roman) {
          if ($n >= $arabic) {
            return $roman . $this->_toRoman($n - $arabic);
          }
        }
    }
}
