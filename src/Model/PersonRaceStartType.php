<?php

namespace IofXmlPhp\Model;

/**
 * Class representing PersonRaceStartType
 *
 * Start information for a person in a race.
 * XSD Type: PersonRaceStart
 */
class PersonRaceStartType
{
    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * The bib number that the person is wearing.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * The time when the person starts.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Defines the course assigned to the person.
     *
     * @var \IofXmlPhp\Model\SimpleCourseType $course
     */
    private $course = null;

    /**
     * Defines the control cards assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @var \IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Defines the fees that the person has been assigned.
     *
     * @var \IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the person.
     *
     * @var \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as raceNumber
     *
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @return int
     */
    public function getRaceNumber()
    {
        return $this->raceNumber;
    }

    /**
     * Sets a new raceNumber
     *
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @param int $raceNumber
     * @return self
     */
    public function setRaceNumber($raceNumber)
    {
        $this->raceNumber = $raceNumber;
        return $this;
    }

    /**
     * Gets as bibNumber
     *
     * The bib number that the person is wearing.
     *
     * @return string
     */
    public function getBibNumber()
    {
        return $this->bibNumber;
    }

    /**
     * Sets a new bibNumber
     *
     * The bib number that the person is wearing.
     *
     * @param string $bibNumber
     * @return self
     */
    public function setBibNumber($bibNumber)
    {
        $this->bibNumber = $bibNumber;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time when the person starts.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time when the person starts.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(?\DateTime $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as course
     *
     * Defines the course assigned to the person.
     *
     * @return \IofXmlPhp\Model\SimpleCourseType
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * Defines the course assigned to the person.
     *
     * @param \IofXmlPhp\Model\SimpleCourseType $course
     * @return self
     */
    public function setCourse(?\IofXmlPhp\Model\SimpleCourseType $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * Defines the control cards assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return self
     * @param \IofXmlPhp\Model\ControlCardType $controlCard
     */
    public function addToControlCard(\IofXmlPhp\Model\ControlCardType $controlCard)
    {
        $this->controlCard[] = $controlCard;
        return $this;
    }

    /**
     * isset controlCard
     *
     * Defines the control cards assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControlCard($index)
    {
        return isset($this->controlCard[$index]);
    }

    /**
     * unset controlCard
     *
     * Defines the control cards assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControlCard($index)
    {
        unset($this->controlCard[$index]);
    }

    /**
     * Gets as controlCard
     *
     * Defines the control cards assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return \IofXmlPhp\Model\ControlCardType[]
     */
    public function getControlCard()
    {
        return $this->controlCard;
    }

    /**
     * Sets a new controlCard
     *
     * Defines the control cards assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param \IofXmlPhp\Model\ControlCardType[] $controlCard
     * @return self
     */
    public function setControlCard(?array $controlCard = null)
    {
        $this->controlCard = $controlCard;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @return self
     * @param \IofXmlPhp\Model\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\IofXmlPhp\Model\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedFee($index)
    {
        return isset($this->assignedFee[$index]);
    }

    /**
     * unset assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedFee($index)
    {
        unset($this->assignedFee[$index]);
    }

    /**
     * Gets as assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @return \IofXmlPhp\Model\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @param \IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     * @return self
     */
    public function setAssignedFee(?array $assignedFee = null)
    {
        $this->assignedFee = $assignedFee;
        return $this;
    }

    /**
     * Adds as serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @return self
     * @param \IofXmlPhp\Model\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\IofXmlPhp\Model\ServiceRequestType $serviceRequest)
    {
        $this->serviceRequest[] = $serviceRequest;
        return $this;
    }

    /**
     * isset serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRequest($index)
    {
        return isset($this->serviceRequest[$index]);
    }

    /**
     * unset serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRequest($index)
    {
        unset($this->serviceRequest[$index]);
    }

    /**
     * Gets as serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @return \IofXmlPhp\Model\ServiceRequestType[]
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @param \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     * @return self
     */
    public function setServiceRequest(?array $serviceRequest = null)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \IofXmlPhp\Model\ExtensionsType
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @param \IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

