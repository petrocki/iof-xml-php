<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamMemberRaceStartType
 *
 * Start information for a team member in a race.
 * XSD Type: TeamMemberRaceStart
 */
class TeamMemberRaceStartType
{
    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * In case of a relay, this is the number of the leg that the team member takes part in.
     *
     * @var int $leg
     */
    private $leg = null;

    /**
     * In case of a relay with parallel legs, this defines the team member's starting order of the leg within the team.
     *
     * @var int $legOrder
     */
    private $legOrder = null;

    /**
     * The bib number that the team member is wearing.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * The time when the team member starts.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Defines the course assigned to the team member.
     *
     * @var \Petrocki\IofXmlPhp\SimpleCourseType $course
     */
    private $course = null;

    /**
     * Defines the control card assigned to the team member. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @var \Petrocki\IofXmlPhp\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Defines the fees that the team member has been assigned.
     *
     * @var \Petrocki\IofXmlPhp\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the team member.
     *
     * @var \Petrocki\IofXmlPhp\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
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
     * Gets as leg
     *
     * In case of a relay, this is the number of the leg that the team member takes part in.
     *
     * @return int
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Sets a new leg
     *
     * In case of a relay, this is the number of the leg that the team member takes part in.
     *
     * @param int $leg
     * @return self
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;
        return $this;
    }

    /**
     * Gets as legOrder
     *
     * In case of a relay with parallel legs, this defines the team member's starting order of the leg within the team.
     *
     * @return int
     */
    public function getLegOrder()
    {
        return $this->legOrder;
    }

    /**
     * Sets a new legOrder
     *
     * In case of a relay with parallel legs, this defines the team member's starting order of the leg within the team.
     *
     * @param int $legOrder
     * @return self
     */
    public function setLegOrder($legOrder)
    {
        $this->legOrder = $legOrder;
        return $this;
    }

    /**
     * Gets as bibNumber
     *
     * The bib number that the team member is wearing.
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
     * The bib number that the team member is wearing.
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
     * The time when the team member starts.
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
     * The time when the team member starts.
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
     * Defines the course assigned to the team member.
     *
     * @return \Petrocki\IofXmlPhp\SimpleCourseType
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * Defines the course assigned to the team member.
     *
     * @param \Petrocki\IofXmlPhp\SimpleCourseType $course
     * @return self
     */
    public function setCourse(?\Petrocki\IofXmlPhp\SimpleCourseType $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * Defines the control card assigned to the team member. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ControlCardType $controlCard
     */
    public function addToControlCard(\Petrocki\IofXmlPhp\ControlCardType $controlCard)
    {
        $this->controlCard[] = $controlCard;
        return $this;
    }

    /**
     * isset controlCard
     *
     * Defines the control card assigned to the team member. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Defines the control card assigned to the team member. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Defines the control card assigned to the team member. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return \Petrocki\IofXmlPhp\ControlCardType[]
     */
    public function getControlCard()
    {
        return $this->controlCard;
    }

    /**
     * Sets a new controlCard
     *
     * Defines the control card assigned to the team member. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param \Petrocki\IofXmlPhp\ControlCardType[] $controlCard
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
     * Defines the fees that the team member has been assigned.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\Petrocki\IofXmlPhp\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * Defines the fees that the team member has been assigned.
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
     * Defines the fees that the team member has been assigned.
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
     * Defines the fees that the team member has been assigned.
     *
     * @return \Petrocki\IofXmlPhp\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * Defines the fees that the team member has been assigned.
     *
     * @param \Petrocki\IofXmlPhp\AssignedFeeType[] $assignedFee
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
     * Defines the services requested by the team member.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\Petrocki\IofXmlPhp\ServiceRequestType $serviceRequest)
    {
        $this->serviceRequest[] = $serviceRequest;
        return $this;
    }

    /**
     * isset serviceRequest
     *
     * Defines the services requested by the team member.
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
     * Defines the services requested by the team member.
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
     * Defines the services requested by the team member.
     *
     * @return \Petrocki\IofXmlPhp\ServiceRequestType[]
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * Defines the services requested by the team member.
     *
     * @param \Petrocki\IofXmlPhp\ServiceRequestType[] $serviceRequest
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
     * @return \Petrocki\IofXmlPhp\ExtensionsType
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
     * @param \Petrocki\IofXmlPhp\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

