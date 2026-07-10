<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamMemberResultType
 *
 * Result information for a team member, including e.g. result status, place, finish time, and split times.
 * XSD Type: TeamMemberResult
 */
class TeamMemberResultType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The id corresponding to this team member's entry in an EntryList.
     *
     * @var \Petrocki\IofXmlPhp\IdType $entryId
     */
    private $entryId = null;

    /**
     * The team member that the result belongs to. If a relay team is missing a team member, omit this element.
     *
     * @var \Petrocki\IofXmlPhp\PersonType $person
     */
    private $person = null;

    /**
     * The organisation that the team member is representing at the event.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The core result information for the person; one element per race in the event.
     *
     * @var \Petrocki\IofXmlPhp\TeamMemberRaceResultType[] $result
     */
    private $result = [
        
    ];

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
     * Gets as entryId
     *
     * The id corresponding to this team member's entry in an EntryList.
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
     * The id corresponding to this team member's entry in an EntryList.
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
     * Gets as person
     *
     * The team member that the result belongs to. If a relay team is missing a team member, omit this element.
     *
     * @return \Petrocki\IofXmlPhp\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * The team member that the result belongs to. If a relay team is missing a team member, omit this element.
     *
     * @param \Petrocki\IofXmlPhp\PersonType $person
     * @return self
     */
    public function setPerson(?\Petrocki\IofXmlPhp\PersonType $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as organisation
     *
     * The organisation that the team member is representing at the event.
     *
     * @return \Petrocki\IofXmlPhp\OrganisationType
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisation that the team member is representing at the event.
     *
     * @param \Petrocki\IofXmlPhp\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(?\Petrocki\IofXmlPhp\OrganisationType $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Adds as result
     *
     * The core result information for the person; one element per race in the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\TeamMemberRaceResultType $result
     */
    public function addToResult(\Petrocki\IofXmlPhp\TeamMemberRaceResultType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * The core result information for the person; one element per race in the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * The core result information for the person; one element per race in the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * The core result information for the person; one element per race in the event.
     *
     * @return \Petrocki\IofXmlPhp\TeamMemberRaceResultType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * The core result information for the person; one element per race in the event.
     *
     * @param \Petrocki\IofXmlPhp\TeamMemberRaceResultType[] $result
     * @return self
     */
    public function setResult(?array $result = null)
    {
        $this->result = $result;
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

