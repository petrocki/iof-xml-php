<?php

namespace IofXmlPhp\Model\StartList;

use IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing StartListAType
 */
class StartListAType extends BaseMessageElementType
{
    /**
     * The event that the start lists belong to.
     *
     * @var \IofXmlPhp\Model\EventType $event
     */
    private $event = null;

    /**
     * Start lists for the classes in the event.
     *
     * @var \IofXmlPhp\Model\ClassStartType[] $classStart
     */
    private $classStart = [
        
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
     * The event that the start lists belong to.
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
     * The event that the start lists belong to.
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
     * Adds as classStart
     *
     * Start lists for the classes in the event.
     *
     * @return self
     * @param \IofXmlPhp\Model\ClassStartType $classStart
     */
    public function addToClassStart(\IofXmlPhp\Model\ClassStartType $classStart)
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
     * @return \IofXmlPhp\Model\ClassStartType[]
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
     * @param \IofXmlPhp\Model\ClassStartType[] $classStart
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

