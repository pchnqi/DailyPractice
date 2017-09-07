<?php

require_once 'Sort/BasicSort.php';
require_once 'Sort/AdvancedSort.php';

define('bracket', '<br>---------------------------------------------------<br>');

$insert_bracket = function () {
	echo constant('bracket');
};

$sort = function ($objs) use ($insert_bracket) {
	foreach ($objs as $obj) {
		echo $obj;
		$insert_bracket();
	}
};

/**  Sort  **/
$sort([ new BasicSort(2), new AdvancedSort(0),]);





