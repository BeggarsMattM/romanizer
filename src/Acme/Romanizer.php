<?php

namespace Acme;

class Romanizer
{
    public function toRoman($n)
    {
        if ($n <= 0) { throw new \Exception; }
        if ($n == 1) return "I";
        return "I" . $this->toRoman($n - 1);
    }
}
