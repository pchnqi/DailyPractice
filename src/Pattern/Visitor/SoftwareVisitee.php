<?php

namespace Source\Pattern\Visitor;

use Source\Pattern\Visitor\Visitee;

class SoftwareVisitee extends Visitee {
	private $title;
	private $softwareCompany;
	private $softwareCompanyURL;
	function __construct($title_in, $softwareCompany_in, $softwareCompanyURL_in) {
		$this->title  = $title_in;
		$this->softwareCompany = $softwareCompany_in;
		$this->softwareCompanyURL = $softwareCompanyURL_in;
	}
	function getSoftwareCompany() {return $this->softwareCompany;}
	function getSoftwareCompanyURL() {return $this->softwareCompanyURL;}
	function getTitle() {return $this->title;}
	function accept(Visitor $visitorIn) {
		$visitorIn->visitSoftware($this);
	}
}
