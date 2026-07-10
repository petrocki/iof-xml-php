<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamMemberStartType
 *
 * Start information for an individual competitor, including e.g. start time and bib number.
 * XSD Type: TeamMemberStart
 */
class TeamMemberStartType
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
     * The team member that the start time belongs to.
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
     * The core start information for the team member; one element per race in the event.
     *
     * @var \Petrocki\IofXmlPhp\TeamMemberRaceStartType[] $start
     */
    private $start = [
        
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
     * The team member that the start time belongs to.
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
     * The team member that the start time belongs to.
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
     * Adds as start
     *
     * The core start information for the team member; one element per race in the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\TeamMemberRaceStartType $start
     */
    public function addToStart(\Petrocki\IofXmlPhp\TeamMemberRaceStartType $start)
    {
        $this->start[] = $start;
        return $this;
    }

    /**
     * isset start
     *
     * The core start information for the team member; one element per race in the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStart($index)
    {
        return isset($this->start[$index]);
    }

    /**
     * unset start
     *
     * The core start information for the team member; one element per race in the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStart($index)
    {
        unset($this->start[$index]);
    }

    /**
     * Gets as start
     *
     * The core start information for the team member; one element per race in the event.
     *
     * @return \Petrocki\IofXmlPhp\TeamMemberRaceStartType[]
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The core start information for the team member; one element per race in the event.
     *
     * @param \Petrocki\IofXmlPhp\TeamMemberRaceStartType[] $start
     * @return self
     */
    public function setStart(array $start)
    {
        $this->start = $start;
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

