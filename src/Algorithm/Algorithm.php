<?php

namespace Source\Algorithm;

/**
*
*/
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

    public function randomArray ( $size, $isSort = false, $start = 0, $end = 100 )
    {
        $array = [];
        
        while ( $size >= 0) {
            $array[] = rand($start, $end);
            $size--;
        }

        if ($isSort) {
            sort($array);
         } 

        return $array;
    } 
}
