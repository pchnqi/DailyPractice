<?php

namespace Source\Pattern\Visitor;

abstract class Visitee
{
    abstract public function accept(Visitor $visitorIn);
}
