<?php


// Generator
function getYields() {
	yield 'http://LaravelAcademy.org';
	yield 'Laravel';
	yield 'Laravel Academy';
}

foreach (getYields() as $yield) {
	echo $yield . PHP_EOL;
}


