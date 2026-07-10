<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing TeamStartType
 *
 * Start information for a team, including e.g. team name, start times and bib numbers.
 * XSD Type: TeamStart
 */
class TeamStartType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The id corresponding to this team's entry in an EntryList.
     *
     * @var \Petrocki\IofXmlPhp\Model\IdType $entryId
     */
    private $entryId = null;

    /**
     * The name of the team, e.g. organisation name and team number for a relay team. Omit if the team name is not know, e.g. a vacant team.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The organisation(s) the team is representing.
     *
     * @var \Petrocki\IofXmlPhp\Model\OrganisationType[] $organisation
     */
    private $organisation = [
        
    ];

    /**
     * The bib number that the members of the team are wearing. If each team member has a unique bib number, use the BibNumber of the TeamMemberStart element.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * Information about the start times for the team members. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @var \Petrocki\IofXmlPhp\Model\TeamMemberStartType[] $teamMemberStart
     */
    private $teamMemberStart = [
        
    ];

    /**
     * Defines the fees that the team has been assigned.
     *
     * @var \Petrocki\IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the team.
     *
     * @var \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

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
     * Gets as entryId
     *
     * The id corresponding to this team's entry in an EntryList.
     *
     * @return \Petrocki\IofXmlPhp\Model\IdType
     */
    public function getEntryId()
    {
        return $this->entryId;
    }

    /**
     * Sets a new entryId
     *
     * The id corresponding to this team's entry in an EntryList.
     *
     * @param \Petrocki\IofXmlPhp\Model\IdType $entryId
     * @return self
     */
    public function setEntryId(?\Petrocki\IofXmlPhp\Model\IdType $entryId = null)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the team, e.g. organisation name and team number for a relay team. Omit if the team name is not know, e.g. a vacant team.
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
     * The name of the team, e.g. organisation name and team number for a relay team. Omit if the team name is not know, e.g. a vacant team.
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
     * The organisation(s) the team is representing.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     */
    public function addToOrganisation(\Petrocki\IofXmlPhp\Model\OrganisationType $organisation)
    {
        $this->organisation[] = $organisation;
        return $this;
    }

    /**
     * isset organisation
     *
     * The organisation(s) the team is representing.
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
     * The organisation(s) the team is representing.
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
     * The organisation(s) the team is representing.
     *
     * @return \Petrocki\IofXmlPhp\Model\OrganisationType[]
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisation(s) the team is representing.
     *
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType[] $organisation
     * @return self
     */
    public function setOrganisation(?array $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Gets as bibNumber
     *
     * The bib number that the members of the team are wearing. If each team member has a unique bib number, use the BibNumber of the TeamMemberStart element.
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
     * The bib number that the members of the team are wearing. If each team member has a unique bib number, use the BibNumber of the TeamMemberStart element.
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
     * Adds as teamMemberStart
     *
     * Information about the start times for the team members. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\TeamMemberStartType $teamMemberStart
     */
    public function addToTeamMemberStart(\Petrocki\IofXmlPhp\Model\TeamMemberStartType $teamMemberStart)
    {
        $this->teamMemberStart[] = $teamMemberStart;
        return $this;
    }

    /**
     * isset teamMemberStart
     *
     * Information about the start times for the team members. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamMemberStart($index)
    {
        return isset($this->teamMemberStart[$index]);
    }

    /**
     * unset teamMemberStart
     *
     * Information about the start times for the team members. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamMemberStart($index)
    {
        unset($this->teamMemberStart[$index]);
    }

    /**
     * Gets as teamMemberStart
     *
     * Information about the start times for the team members. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @return \Petrocki\IofXmlPhp\Model\TeamMemberStartType[]
     */
    public function getTeamMemberStart()
    {
        return $this->teamMemberStart;
    }

    /**
     * Sets a new teamMemberStart
     *
     * Information about the start times for the team members. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @param \Petrocki\IofXmlPhp\Model\TeamMemberStartType[] $teamMemberStart
     * @return self
     */
    public function setTeamMemberStart(?array $teamMemberStart = null)
    {
        $this->teamMemberStart = $teamMemberStart;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * Defines the fees that the team has been assigned.
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
     * Defines the fees that the team has been assigned.
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
     * Defines the fees that the team has been assigned.
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
     * Defines the fees that the team has been assigned.
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
     * Defines the fees that the team has been assigned.
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
     * Defines the services requested by the team.
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
     * @return \Petrocki\IofXmlPhp\Model\ServiceRequestType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
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

