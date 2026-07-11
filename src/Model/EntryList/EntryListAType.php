<?php

namespace IofXmlPhp\Model\EntryList;

use IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing EntryListAType
 */
class EntryListAType extends BaseMessageElementType
{
    /**
     * The event that the entry list belongs to.
     *
     * @var \IofXmlPhp\Model\EventType $event
     */
    private $event = null;

    /**
     * The teams registered for the event.
     *
     * @var \IofXmlPhp\Model\TeamEntryType[] $teamEntry
     */
    private $teamEntry = [
        
    ];

    /**
     * The individual competitors registered for the event.
     *
     * @var \IofXmlPhp\Model\PersonEntryType[] $personEntry
     */
    private $personEntry = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as event
     *
     * The event that the entry list belongs to.
     *
     * @return \IofXmlPhp\Model\EventType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The event that the entry list belongs to.
     *
     * @param \IofXmlPhp\Model\EventType $event
     * @return self
     */
    public function setEvent(\IofXmlPhp\Model\EventType $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as teamEntry
     *
     * The teams registered for the event.
     *
     * @return self
     * @param \IofXmlPhp\Model\TeamEntryType $teamEntry
     */
    public function addToTeamEntry(\IofXmlPhp\Model\TeamEntryType $teamEntry)
    {
        $this->teamEntry[] = $teamEntry;
        return $this;
    }

    /**
     * isset teamEntry
     *
     * The teams registered for the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamEntry($index)
    {
        return isset($this->teamEntry[$index]);
    }

    /**
     * unset teamEntry
     *
     * The teams registered for the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamEntry($index)
    {
        unset($this->teamEntry[$index]);
    }

    /**
     * Gets as teamEntry
     *
     * The teams registered for the event.
     *
     * @return \IofXmlPhp\Model\TeamEntryType[]
     */
    public function getTeamEntry()
    {
        return $this->teamEntry;
    }

    /**
     * Sets a new teamEntry
     *
     * The teams registered for the event.
     *
     * @param \IofXmlPhp\Model\TeamEntryType[] $teamEntry
     * @return self
     */
    public function setTeamEntry(?array $teamEntry = null)
    {
        $this->teamEntry = $teamEntry;
        return $this;
    }

    /**
     * Adds as personEntry
     *
     * The individual competitors registered for the event.
     *
     * @return self
     * @param \IofXmlPhp\Model\PersonEntryType $personEntry
     */
    public function addToPersonEntry(\IofXmlPhp\Model\PersonEntryType $personEntry)
    {
        $this->personEntry[] = $personEntry;
        return $this;
    }

    /**
     * isset personEntry
     *
     * The individual competitors registered for the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonEntry($index)
    {
        return isset($this->personEntry[$index]);
    }

    /**
     * unset personEntry
     *
     * The individual competitors registered for the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonEntry($index)
    {
        unset($this->personEntry[$index]);
    }

    /**
     * Gets as personEntry
     *
     * The individual competitors registered for the event.
     *
     * @return \IofXmlPhp\Model\PersonEntryType[]
     */
    public function getPersonEntry()
    {
        return $this->personEntry;
    }

    /**
     * Sets a new personEntry
     *
     * The individual competitors registered for the event.
     *
     * @param \IofXmlPhp\Model\PersonEntryType[] $personEntry
     * @return self
     */
    public function setPersonEntry(?array $personEntry = null)
    {
        $this->personEntry = $personEntry;
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

