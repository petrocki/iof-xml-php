<?php

namespace Petrocki\IofXmlPhp\StartList;

use Petrocki\IofXmlPhp\BaseMessageElementType;

/**
 * Class representing StartListAType
 */
class StartListAType extends BaseMessageElementType
{
    /**
     * The event that the start lists belong to.
     *
     * @var \Petrocki\IofXmlPhp\EventType $event
     */
    private $event = null;

    /**
     * Start lists for the classes in the event.
     *
     * @var \Petrocki\IofXmlPhp\ClassStartType[] $classStart
     */
    private $classStart = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as event
     *
     * The event that the start lists belong to.
     *
     * @return \Petrocki\IofXmlPhp\EventType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The event that the start lists belong to.
     *
     * @param \Petrocki\IofXmlPhp\EventType $event
     * @return self
     */
    public function setEvent(\Petrocki\IofXmlPhp\EventType $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as classStart
     *
     * Start lists for the classes in the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ClassStartType $classStart
     */
    public function addToClassStart(\Petrocki\IofXmlPhp\ClassStartType $classStart)
    {
        $this->classStart[] = $classStart;
        return $this;
    }

    /**
     * isset classStart
     *
     * Start lists for the classes in the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassStart($index)
    {
        return isset($this->classStart[$index]);
    }

    /**
     * unset classStart
     *
     * Start lists for the classes in the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassStart($index)
    {
        unset($this->classStart[$index]);
    }

    /**
     * Gets as classStart
     *
     * Start lists for the classes in the event.
     *
     * @return \Petrocki\IofXmlPhp\ClassStartType[]
     */
    public function getClassStart()
    {
        return $this->classStart;
    }

    /**
     * Sets a new classStart
     *
     * Start lists for the classes in the event.
     *
     * @param \Petrocki\IofXmlPhp\ClassStartType[] $classStart
     * @return self
     */
    public function setClassStart(?array $classStart = null)
    {
        $this->classStart = $classStart;
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

