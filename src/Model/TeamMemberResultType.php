<?php

namespace IofXmlPhp\Model;

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
     * @var \IofXmlPhp\Model\IdType $entryId
     */
    private $entryId = null;

    /**
     * The team member that the result belongs to. If a relay team is missing a team member, omit this element.
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
     * The core result information for the person; one element per race in the event.
     *
     * @var \IofXmlPhp\Model\TeamMemberRaceResultType[] $result
     */
    private $result = [
        
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
     * The team member that the result belongs to. If a relay team is missing a team member, omit this element.
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
     * The team member that the result belongs to. If a relay team is missing a team member, omit this element.
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
     * Adds as result
     *
     * The core result information for the person; one element per race in the event.
     *
     * @return self
     * @param \IofXmlPhp\Model\TeamMemberRaceResultType $result
     */
    public function addToResult(\IofXmlPhp\Model\TeamMemberRaceResultType $result)
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
     * @return \IofXmlPhp\Model\TeamMemberRaceResultType[]
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
     * @param \IofXmlPhp\Model\TeamMemberRaceResultType[] $result
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

