<?php

namespace IofXmlPhp\Model\EventList;

use IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing EventListAType
 */
class EventListAType extends BaseMessageElementType
{
    /**
     * @var \IofXmlPhp\Model\EventType[] $event
     */
    private $event = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Adds as event
     *
     * @return self
     * @param \IofXmlPhp\Model\EventType $event
     */
    public function addToEvent(\IofXmlPhp\Model\EventType $event)
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
     * @return \IofXmlPhp\Model\EventType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \IofXmlPhp\Model\EventType[] $event
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

