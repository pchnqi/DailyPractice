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




