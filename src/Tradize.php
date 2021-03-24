<?php

namespace Horaceho\Tradize;

class Tradize
{
    public function info()
    {
        return config('tradize.info');
    }

    public function combo($arrays, $i = 0)
    {
        if (!isset($arrays[$i])) {
            return array();
        }

        if ($i == count($arrays) - 1) {
            return $arrays[$i];
        }

        // get combinations from subsequent arrays
        $subs = $this->combo($arrays, $i + 1);

        $result = array();

        // concat each array from tmp with each element from $arrays[$i]
        foreach ($arrays[$i] as $v) {
            foreach ($subs as $s) {
                $result[] = is_array($s) ? array_merge(array($v), $s) : array($v, $s);
            }
        }

        return $result;
    }

    public function convert($name)
    {
        $sctcs = config('tradize.sctcs');
        $chars = preg_split('//u', $name, -1, PREG_SPLIT_NO_EMPTY);

        $combo = [];
        $count = 0;
        foreach ($chars as $char) {
            $combo[$count] = [];
            $matches = $sctcs[$char] ?? [];
            if (empty($matches)) {
                $combo[$count][] = $char;
            } else {
                foreach ($matches as $match) {
                    $combo[$count][] = $match;
                }
            }
            $count += 1;
        }

        $names = [];
        $combos = $this->combo($combo, 0);
        foreach ($combos as $combo) {
            $names[] = implode('', $combo);
        }

        return $names;
    }
}
