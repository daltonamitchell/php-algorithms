<?php

namespace Acme;

/**
 * Write a function, `nearest_larger(arr, i)` which takes an array and an
 * index.  The function should return another index, `j`: this should
 * satisfy:
 *
 * (a) `arr[i] < arr[j]`, AND
 * (b) there is no `j2` closer to `i` than `j` where `arr[i] < arr[j2]`.
 *
 * In case of ties (see example below), choose the earliest (left-most)
 * of the two indices. If no number in `arr` is larger than `arr[i]`,
 * return `nil`.
 */

class NearestLarger
{
    public $values;

    public function __construct($values)
    {
        $this->values = $values;
    }

    public function find($index)
    {
        $left = $index - 1;
        $right = $index + 1;
        $values_length = count($this->values);

        while (($left >= 0) || ($right < $values_length)) {
            if (($left >= 0) && ($this->values[$left] > $this->values[$index])) {
                return $left;
            }

            if (($right < $values_length) && ($this->values[$right] > $this->values[$index])) {
                return $right;
            }

            $left--;
            $right++;
        }

        return null;
    }
}
