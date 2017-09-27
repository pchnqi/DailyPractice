<?php

function writeln ( $line_in )
{
	echo $line_in . PHP_EOL;
}

function print_array ( Array $array )
{
	$buffer = '[';	
	$buffer .= implode(', ', $array);
	$buffer .= ']';

	return $buffer;
}