<?php
/**
 * BookVisitee.php
 * @package         PhpStorm
 * @version         1.0.0
 * @author          nqi
 * @license         Proprietary
 * @copyright   (c) Publishers Clearing House. All rights reserved.
 */

namespace Pattern\Visitor;

class BookVisitee extends Visitee {
	private $author;
	private $title;
	function __construct($title_in, $author_in) {
		$this->author = $author_in;
		$this->title  = $title_in;
	}
	function getAuthor() {return $this->author;}
	function getTitle() {return $this->title;}
	function accept(Visitor $visitorIn) {
		$visitorIn->visitBook($this);
	}
}