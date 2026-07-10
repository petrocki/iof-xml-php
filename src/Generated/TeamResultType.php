<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamResultType
 *
 * Result information for a team, including e.g. result status, place, finish time and individual times for the team members.
 * XSD Type: TeamResult
 */
class TeamResultType
{
    /**
     * The id corresponding to this team's entry in an EntryList.
     *
     * @var \Petrocki\IofXmlPhp\IdType $entryId
     */
    private $entryId = null;

    /**
     * The name of the team, e.g. organisation name and team number for a relay team.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The organisation(s) the team is representing.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationType[] $organisation
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
     * Defines the result information for each team member. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @var \Petrocki\IofXmlPhp\TeamMemberResultType[] $teamMemberResult
     */
    private $teamMemberResult = [
        
    ];

    /**
     * Defines the fees that the team has been assigned.
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
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as entryId
     *
     * The id corresponding to this team's entry in an EntryList.
     *
     * @return \Petrocki\IofXmlPhp\IdType
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
     * @param \Petrocki\IofXmlPhp\IdType $entryId
     * @return self
     */
    public function setEntryId(?\Petrocki\IofXmlPhp\IdType $entryId = null)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the team, e.g. organisation name and team number for a relay team.
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
     * The name of the team, e.g. organisation name and team number for a relay team.
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
     * @return \Petrocki\IofXmlPhp\OrganisationType[]
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
     * @param \Petrocki\IofXmlPhp\OrganisationType[] $organisation
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
     * Adds as teamMemberResult
     *
     * Defines the result information for each team member. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\TeamMemberResultType $teamMemberResult
     */
    public function addToTeamMemberResult(\Petrocki\IofXmlPhp\TeamMemberResultType $teamMemberResult)
    {
        $this->teamMemberResult[] = $teamMemberResult;
        return $this;
    }

    /**
     * isset teamMemberResult
     *
     * Defines the result information for each team member. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamMemberResult($index)
    {
        return isset($this->teamMemberResult[$index]);
    }

    /**
     * unset teamMemberResult
     *
     * Defines the result information for each team member. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamMemberResult($index)
    {
        unset($this->teamMemberResult[$index]);
    }

    /**
     * Gets as teamMemberResult
     *
     * Defines the result information for each team member. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @return \Petrocki\IofXmlPhp\TeamMemberResultType[]
     */
    public function getTeamMemberResult()
    {
        return $this->teamMemberResult;
    }

    /**
     * Sets a new teamMemberResult
     *
     * Defines the result information for each team member. One element per relay leg must be included, even if the team has not assigned any team member to the leg.
     *
     * @param \Petrocki\IofXmlPhp\TeamMemberResultType[] $teamMemberResult
     * @return self
     */
    public function setTeamMemberResult(?array $teamMemberResult = null)
    {
        $this->teamMemberResult = $teamMemberResult;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * Defines the fees that the team has been assigned.
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
     * @return \Petrocki\IofXmlPhp\AssignedFeeType[]
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

