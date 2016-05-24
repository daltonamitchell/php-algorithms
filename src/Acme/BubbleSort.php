<?php

namespace Acme;

/**
* Write a function `bubble_sort(arr)` which will sort an array of
* integers using the "bubble sort"
* methodology. (http://en.wikipedia.org/wiki/Bubble_sort)
*/

class BubbleSort
{
    public function sort($array)
    {
        if (count($array) < 2) {
            return $array;
        }

        $sorted = false;
        while (!$sorted) {
            $sorted = true;
            $i = 0;
            while ($i < (count($array) - 1)) {
                if ($array[$i] > $array[$i + 1]) {
                    $sorted = false;
                    $temp = $array[$i];
                    $array[$i] = $array[$i + 1];
                    $array[$i + 1] = $temp;
                }

                $i++;
            }
        }

        return $array;
    }
}
