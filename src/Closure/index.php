<?php

require 'Pipepp.php';
require 'Pipe.php';

// $app->dispatch( '/users/name' );
$app = new Pipepp();
$app->addRoute( '/users/name', function () {
	$this->responseContentType = 'application/json;charset=utf8';
	$this->responseBody        = '{"name" : "PCH"}';
} );


//
//
$obj1 = new Pipe(1);
$obj2 = new Pipe(2);

$cl = $obj1->getClosure();
var_dump( $cl );
echo $cl() ;

$cl = $cl->bindTo( $obj2 );
var_dump( $cl );
echo $cl(), '<br>';

echo '----  Pipe ---- ';

$array = ['Pipe', 'B', 'C'];

$string = array_reduce( $array, function ( $carry, $item ) {
	return $carry . ' ' . $item;
}, 'String:');
// var_dump( $array );
// var_dump( $string );

$array1 = ['PipePipe', 'BB'];
$string2 = array_reduce( $array1, function ( $carry, $item ) {
	var_dump( $carry );
	return function () use ( $carry, $item ) {
		if (is_null( $carry )) {
			return 'Carry is null' . $item;
		}
		if ($carry instanceof Closure) {
			return $carry() . $item;
		}
	};
});
var_dump( $string2() );

