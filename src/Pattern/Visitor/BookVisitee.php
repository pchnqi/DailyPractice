<?php

namespace Source\Pattern\Visitor;

use Source\Pattern\Visitor\Visitee;

class BookVisitee extends Visitee
{

	private $author;
	private $title;

	function __construct ( $title_in, $author_in )
	{
		$this->author = $author_in;
		$this->title  = $title_in;
	}

	function getAuthor ()
	{
		return $this->author;
	}

	function getTitle ()
	{
		return $this->title;
	}

	function accept ( Visitor $visitorIn )
	{
		$visitorIn->visitBook( $this );
	}
}