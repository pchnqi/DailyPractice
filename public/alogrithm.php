<?php

require __DIR__ . './../vendor/autoload.php';

use Source\Algorithm\Algorithm;

$algorithm = new Algorithm();

$size = 10;
$test_array = $algorithm->randomArray($size, true);
$after_reverse = $algorithm->reverse($test_array);

writeln(print_array($test_array));
writeln(print_array($after_reverse));

echo 'hello, world';
