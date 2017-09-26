<?php

namespace Source\Algorithm;

class Algorithm
{
    public function reverse(array $array)
    {
        $size = count($array);

        $left = 0;
        $right = $size - 1;

        while ($left < $right) {
            $temp = $array[$left];
            $array[$left++] = $array[$right];
            $array[$right--] = $temp;
        }

        return $array;
    }

    public function findCommon(array $sortedA, array $sortedB)
    {
        $i = 0;
        $j = 0;
        $sizeA = count($sortedA);
        $sizeB = count($sortedB);

        $common = [];

        while ($i < $sizeA && $j < $sizeB) {
            if ($sortedA[$i] < $sortedB[$j]) {
                $i++;
                continue;
            }

            if ($sortedA[$i] > $sortedB[$j]) {
                $j++;
                continue;
            }

            $common[] = $sortedA[$i];
            $i++;
            $j++;
        }

        return array_unique($common);
    }

    public function customShuffle( Array $array )
    {
        
    }

    public function randomArray($size, $toSort = false, $start = 0, $end = 100)
    {
        $array = [];
        
        while ($size >= 0) {
            $array[] = mt_rand($start, $end);
            $size--;
        }

        if ($toSort) {
            sort($array);
        }

        return $array;
    }
}
