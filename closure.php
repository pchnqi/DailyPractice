<?php

class App
{

	protected $routes              = [];
	protected $responseContentType = 'text/html';
	protected $responseStatus      = '500';
	protected $responseBody        = 'hello, world';

	public function addRoute ( $routePath, Closure $routeCallback )
	{
		$this->routes[$routePath] = $routeCallback->bindTo( $this, __CLASS__ );
		// var_dump( $this->routes['/users/name'] );
	}

	public function dispatch ( $path )
	{
		if ( isset( $this->routes[$path] ) ) {
			$this->routes[$path]();
		}

		header( 'HTTP/1.1'         . $this->responseStatus );
		header( 'Content-type: '   . $this->responseContentType );
		header( 'Content-length: ' . mb_strlen( $this->responseBody ) );

		echo $this->responseBody;

	}
}

$app = new App();
$app->addRoute( '/users/name', function () {
	$this->responseContentType = 'application/json;charset=utf8';
	$this->responseBody        = '{"name" : "PCH"}';
} );
// $app->dispatch( '/users/name' );

//
class A
{
	protected $val;

	public function __construct ( $val )
	{
		$this->val = $val;
	}

	public function getClosure ()
	{
		return function () {
			echo $this->val;
		};
	}
}

$obj1 = new A(1);
$obj2 = new A(2);

$cl = $obj1->getClosure();
var_dump( $cl );
echo $cl() ;

$cl = $cl->bindTo( $obj2 );
var_dump( $cl );
echo $cl(), '<br>';

echo '----  Pipe ---- ';

$array = ['A', 'B', 'C'];

$string = array_reduce( $array, function ( $carry, $item ) {
	return $carry . ' ' . $item;
}, 'String:');
// var_dump( $array );
// var_dump( $string );

$array1 = ['AA', 'BB'];
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


