<?php

namespace Petrocki\IofXmlPhp\EventList;

use Petrocki\IofXmlPhp\BaseMessageElementType;

/**
 * Class representing EventListAType
 */
class EventListAType extends BaseMessageElementType
{
    /**
     * @var \Petrocki\IofXmlPhp\EventType[] $event
     */
    private $event = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Adds as event
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\EventType $event
     */
    public function addToEvent(\Petrocki\IofXmlPhp\EventType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * @return \Petrocki\IofXmlPhp\EventType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \Petrocki\IofXmlPhp\EventType[] $event
     * @return self
     */
    public function setEvent(?array $event = null)
    {
        $this->event = $event;
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

