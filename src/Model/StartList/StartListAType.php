<?php

namespace Petrocki\IofXmlPhp\Model\StartList;

use Petrocki\IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing StartListAType
 */
class StartListAType extends BaseMessageElementType
{
    /**
     * The event that the start lists belong to.
     *
     * @var \Petrocki\IofXmlPhp\Model\EventType $event
     */
    private $event = null;

    /**
     * Start lists for the classes in the event.
     *
     * @var \Petrocki\IofXmlPhp\Model\ClassStartType[] $classStart
     */
    private $classStart = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as event
     *
     * The event that the start lists belong to.
     *
     * @return \Petrocki\IofXmlPhp\Model\EventType
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
     * @param \Petrocki\IofXmlPhp\Model\EventType $event
     * @return self
     */
    public function setEvent(\Petrocki\IofXmlPhp\Model\EventType $event)
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
     * @param \Petrocki\IofXmlPhp\Model\ClassStartType $classStart
     */
    public function addToClassStart(\Petrocki\IofXmlPhp\Model\ClassStartType $classStart)
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
     * @return \Petrocki\IofXmlPhp\Model\ClassStartType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ClassStartType[] $classStart
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

