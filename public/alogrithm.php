<?php

require __DIR__ . './../vendor/autoload.php';

use Source\Algorithm\Algorithm;

$algorithm = new Algorithm();


$test_array = $algorithm->randomArray(10, true);
$after_reverse = $algorithm->reverse($test_array);

writeln('Array1: ' . print_array($test_array));
writeln('Array2: '. print_array($after_reverse));

$t2 = $algorithm->randomArray(30, true);
$t3 = $algorithm->randomArray(40, true);

$common = $algorithm->findCommon($t2, $t3);

writeln('Sorted Array A: ' . print_array($t2));
writeln('Sorted Array B: ' . print_array($t3));
writeln('Common: ' . print_array($common));

echo 'hello, world';
