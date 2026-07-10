<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing PersonEntryType
 *
 * Defines an event entry for a person.
 * XSD Type: PersonEntry
 */
class PersonEntryType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\Model\IdType $id
     */
    private $id = null;

    /**
     * The person that is entered.
     *
     * @var \Petrocki\IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The organisation that the person represents at the event.
     *
     * @var \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @var \Petrocki\IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @var \Petrocki\IofXmlPhp\Model\ScoreType[] $score
     */
    private $score = [
        
    ];

    /**
     * The class(es) the person wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @var \Petrocki\IofXmlPhp\Model\ClassType[] $class
     */
    private $class = [
        
    ];

    /**
     * The ordinal numbers of the races that the person is taking part in, starting at 1. If not specified, the person takes part in all races.
     *
     * @var int[] $raceNumber
     */
    private $raceNumber = [
        
    ];

    /**
     * The fees that the person has to pay when entering the event. In a multi-race event, there is usually one element for each race.
     *
     * @var \Petrocki\IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the person.
     *
     * @var \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * Any special preferences regarding start time that has to be taken into consideration when making the start list draw.
     *
     * @var \Petrocki\IofXmlPhp\Model\StartTimeAllocationRequestType $startTimeAllocationRequest
     */
    private $startTimeAllocationRequest = null;

    /**
     * The time when the entry was first submitted.
     *
     * @var \DateTime $entryTime
     */
    private $entryTime = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as modifyTime
     *
     * @return \DateTime
     */
    public function getModifyTime()
    {
        return $this->modifyTime;
    }

    /**
     * Sets a new modifyTime
     *
     * @param \DateTime $modifyTime
     * @return self
     */
    public function setModifyTime(\DateTime $modifyTime)
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return \Petrocki\IofXmlPhp\Model\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \Petrocki\IofXmlPhp\Model\IdType $id
     * @return self
     */
    public function setId(?\Petrocki\IofXmlPhp\Model\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as person
     *
     * The person that is entered.
     *
     * @return \Petrocki\IofXmlPhp\Model\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * The person that is entered.
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(\Petrocki\IofXmlPhp\Model\PersonType $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as organisation
     *
     * The organisation that the person represents at the event.
     *
     * @return \Petrocki\IofXmlPhp\Model\OrganisationType
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisation that the person represents at the event.
     *
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(?\Petrocki\IofXmlPhp\Model\OrganisationType $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ControlCardType $controlCard
     */
    public function addToControlCard(\Petrocki\IofXmlPhp\Model\ControlCardType $controlCard)
    {
        $this->controlCard[] = $controlCard;
        return $this;
    }

    /**
     * isset controlCard
     *
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return \Petrocki\IofXmlPhp\Model\ControlCardType[]
     */
    public function getControlCard()
    {
        return $this->controlCard;
    }

    /**
     * Sets a new controlCard
     *
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param \Petrocki\IofXmlPhp\Model\ControlCardType[] $controlCard
     * @return self
     */
    public function setControlCard(?array $controlCard = null)
    {
        $this->controlCard = $controlCard;
        return $this;
    }

    /**
     * Adds as score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ScoreType $score
     */
    public function addToScore(\Petrocki\IofXmlPhp\Model\ScoreType $score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * isset score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScore($index)
    {
        return isset($this->score[$index]);
    }

    /**
     * unset score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScore($index)
    {
        unset($this->score[$index]);
    }

    /**
     * Gets as score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @return \Petrocki\IofXmlPhp\Model\ScoreType[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @param \Petrocki\IofXmlPhp\Model\ScoreType[] $score
     * @return self
     */
    public function setScore(?array $score = null)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Adds as class
     *
     * The class(es) the person wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ClassType $class
     */
    public function addToClass(\Petrocki\IofXmlPhp\Model\ClassType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * The class(es) the person wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * The class(es) the person wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * The class(es) the person wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @return \Petrocki\IofXmlPhp\Model\ClassType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The class(es) the person wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @param \Petrocki\IofXmlPhp\Model\ClassType[] $class
     * @return self
     */
    public function setClass(?array $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as raceNumber
     *
     * The ordinal numbers of the races that the person is taking part in, starting at 1. If not specified, the person takes part in all races.
     *
     * @return self
     * @param int $raceNumber
     */
    public function addToRaceNumber($raceNumber)
    {
        $this->raceNumber[] = $raceNumber;
        return $this;
    }

    /**
     * isset raceNumber
     *
     * The ordinal numbers of the races that the person is taking part in, starting at 1. If not specified, the person takes part in all races.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRaceNumber($index)
    {
        return isset($this->raceNumber[$index]);
    }

    /**
     * unset raceNumber
     *
     * The ordinal numbers of the races that the person is taking part in, starting at 1. If not specified, the person takes part in all races.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRaceNumber($index)
    {
        unset($this->raceNumber[$index]);
    }

    /**
     * Gets as raceNumber
     *
     * The ordinal numbers of the races that the person is taking part in, starting at 1. If not specified, the person takes part in all races.
     *
     * @return int[]
     */
    public function getRaceNumber()
    {
        return $this->raceNumber;
    }

    /**
     * Sets a new raceNumber
     *
     * The ordinal numbers of the races that the person is taking part in, starting at 1. If not specified, the person takes part in all races.
     *
     * @param int[] $raceNumber
     * @return self
     */
    public function setRaceNumber(?array $raceNumber = null)
    {
        $this->raceNumber = $raceNumber;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * The fees that the person has to pay when entering the event. In a multi-race event, there is usually one element for each race.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\Petrocki\IofXmlPhp\Model\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * The fees that the person has to pay when entering the event. In a multi-race event, there is usually one element for each race.
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
     * The fees that the person has to pay when entering the event. In a multi-race event, there is usually one element for each race.
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
     * The fees that the person has to pay when entering the event. In a multi-race event, there is usually one element for each race.
     *
     * @return \Petrocki\IofXmlPhp\Model\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * The fees that the person has to pay when entering the event. In a multi-race event, there is usually one element for each race.
     *
     * @param \Petrocki\IofXmlPhp\Model\AssignedFeeType[] $assignedFee
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
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\Petrocki\IofXmlPhp\Model\ServiceRequestType $serviceRequest)
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
     * @return \Petrocki\IofXmlPhp\Model\ServiceRequestType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     * @return self
     */
    public function setServiceRequest(?array $serviceRequest = null)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Gets as startTimeAllocationRequest
     *
     * Any special preferences regarding start time that has to be taken into consideration when making the start list draw.
     *
     * @return \Petrocki\IofXmlPhp\Model\StartTimeAllocationRequestType
     */
    public function getStartTimeAllocationRequest()
    {
        return $this->startTimeAllocationRequest;
    }

    /**
     * Sets a new startTimeAllocationRequest
     *
     * Any special preferences regarding start time that has to be taken into consideration when making the start list draw.
     *
     * @param \Petrocki\IofXmlPhp\Model\StartTimeAllocationRequestType $startTimeAllocationRequest
     * @return self
     */
    public function setStartTimeAllocationRequest(?\Petrocki\IofXmlPhp\Model\StartTimeAllocationRequestType $startTimeAllocationRequest = null)
    {
        $this->startTimeAllocationRequest = $startTimeAllocationRequest;
        return $this;
    }

    /**
     * Gets as entryTime
     *
     * The time when the entry was first submitted.
     *
     * @return \DateTime
     */
    public function getEntryTime()
    {
        return $this->entryTime;
    }

    /**
     * Sets a new entryTime
     *
     * The time when the entry was first submitted.
     *
     * @param \DateTime $entryTime
     * @return self
     */
    public function setEntryTime(?\DateTime $entryTime = null)
    {
        $this->entryTime = $entryTime;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \Petrocki\IofXmlPhp\Model\ExtensionsType
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
     * @param \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

