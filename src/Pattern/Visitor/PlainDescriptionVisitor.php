<?php

namespace Source\Pattern\Visitor;

use Source\Pattern\Visitor\Visitor;

class PlainDescriptionVisitor extends Visitor
{

	private $description = null;

	function getDescription ()
	{
		return $this->description;
	}

	function setDescription ( $descriptionIn )
	{
		$this->description = $descriptionIn;
	}

	function visitBook ( BookVisitee $bookVisiteeIn )
	{
		$this->setDescription( $bookVisiteeIn->getTitle() . '. written by ' . $bookVisiteeIn->getAuthor() );
	}

	function visitSoftware ( SoftwareVisitee $softwareVisiteeIn )
	{
		$this->setDescription( $softwareVisiteeIn->getTitle() .
		                       '. made by '    . $softwareVisiteeIn->getSoftwareCompany() .
		                       '. website at ' . $softwareVisiteeIn->getSoftwareCompanyURL() );
	}
}
