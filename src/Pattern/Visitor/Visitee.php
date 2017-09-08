<?php

namespace Source\Pattern\Visitor;

abstract class Visitee
{

	abstract function accept ( Visitor $visitorIn );
}
