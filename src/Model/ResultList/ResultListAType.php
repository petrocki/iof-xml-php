<?php

namespace IofXmlPhp\Model\ResultList;

use IofXmlPhp\Model\BaseMessageElementType;

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
     * @var \IofXmlPhp\Model\EventType $event
     */
    private $event = null;

    /**
     * Result lists for the classes in the event.
     *
     * @var \IofXmlPhp\Model\ClassResultType[] $classResult
     */
    private $classResult = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
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
     * @return \IofXmlPhp\Model\EventType
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
     * @param \IofXmlPhp\Model\EventType $event
     * @return self
     */
    public function setEvent(\IofXmlPhp\Model\EventType $event)
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
     * @param \IofXmlPhp\Model\ClassResultType $classResult
     */
    public function addToClassResult(\IofXmlPhp\Model\ClassResultType $classResult)
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
     * @return \IofXmlPhp\Model\ClassResultType[]
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
     * @param \IofXmlPhp\Model\ClassResultType[] $classResult
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

