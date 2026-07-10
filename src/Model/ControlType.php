<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing ControlType
 *
 * Defines a control, without any relationship to a particular course.
 * XSD Type: Control
 */
class ControlType
{
    /**
     * The type of the control: (ordinary) control, start, finish, crossing point or end of marked route. This attribute can be overridden on the CourseControl level.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The code of the control.
     *
     * @var \Petrocki\IofXmlPhp\Model\IdType $id
     */
    private $id = null;

    /**
     * If the control has multiple punching units with separate codes, specify all these codes using elements of this kind. Omit this element if there is a single punching unit whose code is the same as the control code.
     *
     * @var \Petrocki\IofXmlPhp\Model\IdType[] $punchingUnitId
     */
    private $punchingUnitId = [
        
    ];

    /**
     * The name of the control, used for e.g. online controls ('spectator control', 'prewarning').
     *
     * @var \Petrocki\IofXmlPhp\Model\LanguageStringType[] $name
     */
    private $name = [
        
    ];

    /**
     * The geographical position of the control.
     *
     * @var \Petrocki\IofXmlPhp\Model\GeoPositionType $position
     */
    private $position = null;

    /**
     * The position of the control according to tha map's coordinate system.
     *
     * @var \Petrocki\IofXmlPhp\Model\MapPositionType $mapPosition
     */
    private $mapPosition = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as type
     *
     * The type of the control: (ordinary) control, start, finish, crossing point or end of marked route. This attribute can be overridden on the CourseControl level.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the control: (ordinary) control, start, finish, crossing point or end of marked route. This attribute can be overridden on the CourseControl level.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

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
     * The code of the control.
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
     * The code of the control.
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
     * Adds as punchingUnitId
     *
     * If the control has multiple punching units with separate codes, specify all these codes using elements of this kind. Omit this element if there is a single punching unit whose code is the same as the control code.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\IdType $punchingUnitId
     */
    public function addToPunchingUnitId(\Petrocki\IofXmlPhp\Model\IdType $punchingUnitId)
    {
        $this->punchingUnitId[] = $punchingUnitId;
        return $this;
    }

    /**
     * isset punchingUnitId
     *
     * If the control has multiple punching units with separate codes, specify all these codes using elements of this kind. Omit this element if there is a single punching unit whose code is the same as the control code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPunchingUnitId($index)
    {
        return isset($this->punchingUnitId[$index]);
    }

    /**
     * unset punchingUnitId
     *
     * If the control has multiple punching units with separate codes, specify all these codes using elements of this kind. Omit this element if there is a single punching unit whose code is the same as the control code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPunchingUnitId($index)
    {
        unset($this->punchingUnitId[$index]);
    }

    /**
     * Gets as punchingUnitId
     *
     * If the control has multiple punching units with separate codes, specify all these codes using elements of this kind. Omit this element if there is a single punching unit whose code is the same as the control code.
     *
     * @return \Petrocki\IofXmlPhp\Model\IdType[]
     */
    public function getPunchingUnitId()
    {
        return $this->punchingUnitId;
    }

    /**
     * Sets a new punchingUnitId
     *
     * If the control has multiple punching units with separate codes, specify all these codes using elements of this kind. Omit this element if there is a single punching unit whose code is the same as the control code.
     *
     * @param \Petrocki\IofXmlPhp\Model\IdType[] $punchingUnitId
     * @return self
     */
    public function setPunchingUnitId(?array $punchingUnitId = null)
    {
        $this->punchingUnitId = $punchingUnitId;
        return $this;
    }

    /**
     * Adds as name
     *
     * The name of the control, used for e.g. online controls ('spectator control', 'prewarning').
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\LanguageStringType $name
     */
    public function addToName(\Petrocki\IofXmlPhp\Model\LanguageStringType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * The name of the control, used for e.g. online controls ('spectator control', 'prewarning').
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * The name of the control, used for e.g. online controls ('spectator control', 'prewarning').
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * The name of the control, used for e.g. online controls ('spectator control', 'prewarning').
     *
     * @return \Petrocki\IofXmlPhp\Model\LanguageStringType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the control, used for e.g. online controls ('spectator control', 'prewarning').
     *
     * @param \Petrocki\IofXmlPhp\Model\LanguageStringType[] $name
     * @return self
     */
    public function setName(?array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as position
     *
     * The geographical position of the control.
     *
     * @return \Petrocki\IofXmlPhp\Model\GeoPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The geographical position of the control.
     *
     * @param \Petrocki\IofXmlPhp\Model\GeoPositionType $position
     * @return self
     */
    public function setPosition(?\Petrocki\IofXmlPhp\Model\GeoPositionType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as mapPosition
     *
     * The position of the control according to tha map's coordinate system.
     *
     * @return \Petrocki\IofXmlPhp\Model\MapPositionType
     */
    public function getMapPosition()
    {
        return $this->mapPosition;
    }

    /**
     * Sets a new mapPosition
     *
     * The position of the control according to tha map's coordinate system.
     *
     * @param \Petrocki\IofXmlPhp\Model\MapPositionType $mapPosition
     * @return self
     */
    public function setMapPosition(?\Petrocki\IofXmlPhp\Model\MapPositionType $mapPosition = null)
    {
        $this->mapPosition = $mapPosition;
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

