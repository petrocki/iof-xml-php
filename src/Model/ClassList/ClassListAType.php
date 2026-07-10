<?php

namespace Petrocki\IofXmlPhp\Model\ClassList;

use Petrocki\IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing ClassListAType
 */
class ClassListAType extends BaseMessageElementType
{
    /**
     * @var \Petrocki\IofXmlPhp\Model\ClassType[] $class
     */
    private $class = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Adds as class
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ClassType $class
     */
    public function addToClass(\Petrocki\IofXmlPhp\Model\ClassType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * @return \Petrocki\IofXmlPhp\Model\ClassType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * @param \Petrocki\IofXmlPhp\Model\ClassType[] $class
     * @return self
     */
    public function setClass(?array $class = null)
    {
        $this->class = $class;
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

