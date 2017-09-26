<?php

namespace Source\Pattern\Visitor;

class SoftwareVisitee extends Visitee
{
    private $title;
    private $softwareCompany;
    private $softwareCompanyURL;

    public function __construct($title_in, $softwareCompany_in, $softwareCompanyURL_in)
    {
        $this->title = $title_in;
        $this->softwareCompany = $softwareCompany_in;
        $this->softwareCompanyURL = $softwareCompanyURL_in;
    }

    public function getSoftwareCompany()
    {
        return $this->softwareCompany;
    }

    public function getSoftwareCompanyURL()
    {
        return $this->softwareCompanyURL;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function accept(Visitor $visitorIn)
    {
        $visitorIn->visitSoftware($this);
    }
}
