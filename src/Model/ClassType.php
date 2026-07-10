<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing ClassType
 *
 * Defines a class type, which is used to group classes in categories.
 * XSD Type: ClassType
 */
class ClassType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\Model\IdType $id
     */
    private $id = null;

    /**
     * The name of the class type.
     *
     * @var string $name
     */
    private $name = null;

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
     * Gets as id
     *
     * @return \Petrocki\IofXmlPhp\Model\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \Petrocki\IofXmlPhp\Model\IdType $id
     * @return self
     */
    public function setId(?\Petrocki\IofXmlPhp\Model\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the class type.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the class type.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

