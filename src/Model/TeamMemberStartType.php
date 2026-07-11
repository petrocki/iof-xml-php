<?php

namespace IofXmlPhp\Model;

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
     * @var \IofXmlPhp\Model\IdType $entryId
     */
    private $entryId = null;

    /**
     * The team member that the start time belongs to.
     *
     * @var \IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The organisation that the team member is representing at the event.
     *
     * @var \IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The core start information for the team member; one element per race in the event.
     *
     * @var \IofXmlPhp\Model\TeamMemberRaceStartType[] $start
     */
    private $start = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
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
     * @return \IofXmlPhp\Model\IdType
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
     * @param \IofXmlPhp\Model\IdType $entryId
     * @return self
     */
    public function setEntryId(?\IofXmlPhp\Model\IdType $entryId = null)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * Gets as person
     *
     * The team member that the start time belongs to.
     *
     * @return \IofXmlPhp\Model\PersonType
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
     * @param \IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(?\IofXmlPhp\Model\PersonType $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as organisation
     *
     * The organisation that the team member is representing at the event.
     *
     * @return \IofXmlPhp\Model\OrganisationType
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
     * @param \IofXmlPhp\Model\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(?\IofXmlPhp\Model\OrganisationType $organisation = null)
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
     * @param \IofXmlPhp\Model\TeamMemberRaceStartType $start
     */
    public function addToStart(\IofXmlPhp\Model\TeamMemberRaceStartType $start)
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
     * @return \IofXmlPhp\Model\TeamMemberRaceStartType[]
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
     * @param \IofXmlPhp\Model\TeamMemberRaceStartType[] $start
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

