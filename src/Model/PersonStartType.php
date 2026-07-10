<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing PersonStartType
 *
 * Start information for an individual competitor, including e.g. start time and bib number.
 * XSD Type: PersonStart
 */
class PersonStartType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The id corresponding to this person's entry in an EntryList.
     *
     * @var \Petrocki\IofXmlPhp\Model\IdType $entryId
     */
    private $entryId = null;

    /**
     * The person that the start time belongs to. Omit if there is no person assigned to the start time, e.g. a vacant person.
     *
     * @var \Petrocki\IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The organisation that the person is representing at the event.
     *
     * @var \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The core start information for the person; one element per race in the event.
     *
     * @var \Petrocki\IofXmlPhp\Model\PersonRaceStartType[] $start
     */
    private $start = [
        
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
     * The id corresponding to this person's entry in an EntryList.
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
     * The id corresponding to this person's entry in an EntryList.
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
     * Gets as person
     *
     * The person that the start time belongs to. Omit if there is no person assigned to the start time, e.g. a vacant person.
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
     * The person that the start time belongs to. Omit if there is no person assigned to the start time, e.g. a vacant person.
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(?\Petrocki\IofXmlPhp\Model\PersonType $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as organisation
     *
     * The organisation that the person is representing at the event.
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
     * The organisation that the person is representing at the event.
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
     * Adds as start
     *
     * The core start information for the person; one element per race in the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\PersonRaceStartType $start
     */
    public function addToStart(\Petrocki\IofXmlPhp\Model\PersonRaceStartType $start)
    {
        $this->start[] = $start;
        return $this;
    }

    /**
     * isset start
     *
     * The core start information for the person; one element per race in the event.
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
     * The core start information for the person; one element per race in the event.
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
     * The core start information for the person; one element per race in the event.
     *
     * @return \Petrocki\IofXmlPhp\Model\PersonRaceStartType[]
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The core start information for the person; one element per race in the event.
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonRaceStartType[] $start
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

