<?php

namespace Horaceho\Tradize;

use Illuminate\Support\Arr;

class Tradize
{
    public function combo($table, $name)
    {
        $chars = preg_split('//u', $name, -1, PREG_SPLIT_NO_EMPTY);

        $combo = [];
        $count = 0;
        foreach ($chars as $char) {
            $combo[$count++] = $table[$char] ?? Arr::wrap($char);
        }

        $names = [];
        $items = Arr::crossJoin(...$combo);
        foreach ($items as $item) {
            $names[] = implode('', $item);
        }

        return $names;
    }

    public function convert($name)
    {
        $table = config('tradize.sctcs');
        $names = $this->combo($table, $name);

        return $names;
    }

    public function invert($name)
    {
        $table = config('tradize.tcscs');
        $names = $this->combo($table, $name);

        return $names;
    }
}
