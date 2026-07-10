<?php

namespace Petrocki\IofXmlPhp\ResultList;

use Petrocki\IofXmlPhp\BaseMessageElementType;

/**
 * Class representing ResultListAType
 */
class ResultListAType extends BaseMessageElementType
{
    /**
     * The status of the result list.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The event that the result lists belong to.
     *
     * @var \Petrocki\IofXmlPhp\EventType $event
     */
    private $event = null;

    /**
     * Result lists for the classes in the event.
     *
     * @var \Petrocki\IofXmlPhp\ClassResultType[] $classResult
     */
    private $classResult = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as status
     *
     * The status of the result list.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the result list.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as event
     *
     * The event that the result lists belong to.
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
     * The event that the result lists belong to.
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
     * Adds as classResult
     *
     * Result lists for the classes in the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ClassResultType $classResult
     */
    public function addToClassResult(\Petrocki\IofXmlPhp\ClassResultType $classResult)
    {
        $this->classResult[] = $classResult;
        return $this;
    }

    /**
     * isset classResult
     *
     * Result lists for the classes in the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassResult($index)
    {
        return isset($this->classResult[$index]);
    }

    /**
     * unset classResult
     *
     * Result lists for the classes in the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassResult($index)
    {
        unset($this->classResult[$index]);
    }

    /**
     * Gets as classResult
     *
     * Result lists for the classes in the event.
     *
     * @return \Petrocki\IofXmlPhp\ClassResultType[]
     */
    public function getClassResult()
    {
        return $this->classResult;
    }

    /**
     * Sets a new classResult
     *
     * Result lists for the classes in the event.
     *
     * @param \Petrocki\IofXmlPhp\ClassResultType[] $classResult
     * @return self
     */
    public function setClassResult(?array $classResult = null)
    {
        $this->classResult = $classResult;
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

