<?php

namespace Acme;

class Arabicizer
{
    public function toArabic($n)
    {
        if ($n === "") return 0;
        $head = $n[0];
        $tail = substr($n, 1);

        if ($head == "I") return 1 + $this->toArabic($tail);
    }
}
