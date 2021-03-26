<?php

namespace Horaceho\Tradize;

use Illuminate\Support\Arr;

class Tradize
{
    public function combo($name)
    {
        $sctcs = config('tradize.sctcs');
        $chars = preg_split('//u', $name, -1, PREG_SPLIT_NO_EMPTY);

        $combo = [];
        $count = 0;
        foreach ($chars as $char) {
            $combo[$count++] = $sctcs[$char] ?? Arr::wrap($char);
        }

        return $combo;
    }

    public function convert($name)
    {
        $combo = $this->combo($name);
        $items = Arr::crossJoin(...$combo);

        $names = [];

        foreach ($items as $item) {
            $names[] = implode('', $item);
        }

        return $names;
    }
}
