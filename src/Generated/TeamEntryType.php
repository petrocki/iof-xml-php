<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamEntryType
 *
 * Defines an event entry for a team.
 * XSD Type: TeamEntry
 */
class TeamEntryType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\IdType $id
     */
    private $id = null;

    /**
     * The name of the team. If a relay, this is probably the name of the club optionally followed by a sequence number to distinguish teams from the same club in a class.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The organisation(s) that the team represents.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationType[] $organisation
     */
    private $organisation = [
        
    ];

    /**
     * The persons that make up the team.
     *
     * @var \Petrocki\IofXmlPhp\TeamEntryPersonType[] $teamEntryPerson
     */
    private $teamEntryPerson = [
        
    ];

    /**
     * The class(es) the team wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @var \Petrocki\IofXmlPhp\ClassType[] $class
     */
    private $class = [
        
    ];

    /**
     * The numbers of the races that the team is taking part in. If not specified, team person takes part in all races.
     *
     * @var int[] $race
     */
    private $race = [
        
    ];

    /**
     * The fees that the team as a whole has to pay when entering the event. In a multi-race event, there is usually one element for each race. If there are differentated fees for the team members, specify them in the TeamEntryPerson elements.
     *
     * @var \Petrocki\IofXmlPhp\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the team.
     *
     * @var \Petrocki\IofXmlPhp\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * Any special preferences regarding start time that has to be taken into consideration when making the start list draw.
     *
     * @var \Petrocki\IofXmlPhp\StartTimeAllocationRequestType $startTimeAllocationRequest
     */
    private $startTimeAllocationRequest = null;

    /**
     * Contact information (name and e.g. mobile phone number) to a team leader or coach, expressed as plain text.
     *
     * @var string $contactInformation
     */
    private $contactInformation = null;

    /**
     * The time when the entry was first submitted.
     *
     * @var \DateTime $entryTime
     */
    private $entryTime = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
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
     * @return \Petrocki\IofXmlPhp\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \Petrocki\IofXmlPhp\IdType $id
     * @return self
     */
    public function setId(?\Petrocki\IofXmlPhp\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the team. If a relay, this is probably the name of the club optionally followed by a sequence number to distinguish teams from the same club in a class.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the team. If a relay, this is probably the name of the club optionally followed by a sequence number to distinguish teams from the same club in a class.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as organisation
     *
     * The organisation(s) that the team represents.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\OrganisationType $organisation
     */
    public function addToOrganisation(\Petrocki\IofXmlPhp\OrganisationType $organisation)
    {
        $this->organisation[] = $organisation;
        return $this;
    }

    /**
     * isset organisation
     *
     * The organisation(s) that the team represents.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisation($index)
    {
        return isset($this->organisation[$index]);
    }

    /**
     * unset organisation
     *
     * The organisation(s) that the team represents.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisation($index)
    {
        unset($this->organisation[$index]);
    }

    /**
     * Gets as organisation
     *
     * The organisation(s) that the team represents.
     *
     * @return \Petrocki\IofXmlPhp\OrganisationType[]
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisation(s) that the team represents.
     *
     * @param \Petrocki\IofXmlPhp\OrganisationType[] $organisation
     * @return self
     */
    public function setOrganisation(?array $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Adds as teamEntryPerson
     *
     * The persons that make up the team.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\TeamEntryPersonType $teamEntryPerson
     */
    public function addToTeamEntryPerson(\Petrocki\IofXmlPhp\TeamEntryPersonType $teamEntryPerson)
    {
        $this->teamEntryPerson[] = $teamEntryPerson;
        return $this;
    }

    /**
     * isset teamEntryPerson
     *
     * The persons that make up the team.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamEntryPerson($index)
    {
        return isset($this->teamEntryPerson[$index]);
    }

    /**
     * unset teamEntryPerson
     *
     * The persons that make up the team.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamEntryPerson($index)
    {
        unset($this->teamEntryPerson[$index]);
    }

    /**
     * Gets as teamEntryPerson
     *
     * The persons that make up the team.
     *
     * @return \Petrocki\IofXmlPhp\TeamEntryPersonType[]
     */
    public function getTeamEntryPerson()
    {
        return $this->teamEntryPerson;
    }

    /**
     * Sets a new teamEntryPerson
     *
     * The persons that make up the team.
     *
     * @param \Petrocki\IofXmlPhp\TeamEntryPersonType[] $teamEntryPerson
     * @return self
     */
    public function setTeamEntryPerson(?array $teamEntryPerson = null)
    {
        $this->teamEntryPerson = $teamEntryPerson;
        return $this;
    }

    /**
     * Adds as class
     *
     * The class(es) the team wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ClassType $class
     */
    public function addToClass(\Petrocki\IofXmlPhp\ClassType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * The class(es) the team wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
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
     * The class(es) the team wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
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
     * The class(es) the team wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @return \Petrocki\IofXmlPhp\ClassType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The class(es) the team wants to take part in. Multiple classes may be provided in order of preference in scenarios where the number of competitors are limited in some classes.
     *
     * @param \Petrocki\IofXmlPhp\ClassType[] $class
     * @return self
     */
    public function setClass(?array $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as race
     *
     * The numbers of the races that the team is taking part in. If not specified, team person takes part in all races.
     *
     * @return self
     * @param int $race
     */
    public function addToRace($race)
    {
        $this->race[] = $race;
        return $this;
    }

    /**
     * isset race
     *
     * The numbers of the races that the team is taking part in. If not specified, team person takes part in all races.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRace($index)
    {
        return isset($this->race[$index]);
    }

    /**
     * unset race
     *
     * The numbers of the races that the team is taking part in. If not specified, team person takes part in all races.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRace($index)
    {
        unset($this->race[$index]);
    }

    /**
     * Gets as race
     *
     * The numbers of the races that the team is taking part in. If not specified, team person takes part in all races.
     *
     * @return int[]
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Sets a new race
     *
     * The numbers of the races that the team is taking part in. If not specified, team person takes part in all races.
     *
     * @param int[] $race
     * @return self
     */
    public function setRace(?array $race = null)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * The fees that the team as a whole has to pay when entering the event. In a multi-race event, there is usually one element for each race. If there are differentated fees for the team members, specify them in the TeamEntryPerson elements.
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
     * The fees that the team as a whole has to pay when entering the event. In a multi-race event, there is usually one element for each race. If there are differentated fees for the team members, specify them in the TeamEntryPerson elements.
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
     * The fees that the team as a whole has to pay when entering the event. In a multi-race event, there is usually one element for each race. If there are differentated fees for the team members, specify them in the TeamEntryPerson elements.
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
     * The fees that the team as a whole has to pay when entering the event. In a multi-race event, there is usually one element for each race. If there are differentated fees for the team members, specify them in the TeamEntryPerson elements.
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
     * The fees that the team as a whole has to pay when entering the event. In a multi-race event, there is usually one element for each race. If there are differentated fees for the team members, specify them in the TeamEntryPerson elements.
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
     * Defines the services requested by the team.
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
     * Defines the services requested by the team.
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
     * Defines the services requested by the team.
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
     * Defines the services requested by the team.
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
     * Defines the services requested by the team.
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
     * Gets as startTimeAllocationRequest
     *
     * Any special preferences regarding start time that has to be taken into consideration when making the start list draw.
     *
     * @return \Petrocki\IofXmlPhp\StartTimeAllocationRequestType
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
     * @param \Petrocki\IofXmlPhp\StartTimeAllocationRequestType $startTimeAllocationRequest
     * @return self
     */
    public function setStartTimeAllocationRequest(?\Petrocki\IofXmlPhp\StartTimeAllocationRequestType $startTimeAllocationRequest = null)
    {
        $this->startTimeAllocationRequest = $startTimeAllocationRequest;
        return $this;
    }

    /**
     * Gets as contactInformation
     *
     * Contact information (name and e.g. mobile phone number) to a team leader or coach, expressed as plain text.
     *
     * @return string
     */
    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    /**
     * Sets a new contactInformation
     *
     * Contact information (name and e.g. mobile phone number) to a team leader or coach, expressed as plain text.
     *
     * @param string $contactInformation
     * @return self
     */
    public function setContactInformation($contactInformation)
    {
        $this->contactInformation = $contactInformation;
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

