<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing CourseType
 *
 * Defines a course, i.e. a number of controls including start and finish.
 * XSD Type: Course
 */
class CourseType
{
    /**
     * The number of competitors that this course has been assigned to.
     *
     * @var int $numberOfCompetitors
     */
    private $numberOfCompetitors = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\Model\IdType $id
     */
    private $id = null;

    /**
     * The name of the course.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The family or group of forked courses that the course is part of.
     *
     * @var string $courseFamily
     */
    private $courseFamily = null;

    /**
     * The length of the course, in meters.
     *
     * @var float $length
     */
    private $length = null;

    /**
     * The climb of the course, in meters, along the expected best route choice.
     *
     * @var float $climb
     */
    private $climb = null;

    /**
     * The controls, including start and finish, that the course is made up of.
     *
     * @var \Petrocki\IofXmlPhp\Model\CourseControlType[] $courseControl
     */
    private $courseControl = [
        
    ];

    /**
     * The id of the map used for this course.
     *
     * @var int $mapId
     */
    private $mapId = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as numberOfCompetitors
     *
     * The number of competitors that this course has been assigned to.
     *
     * @return int
     */
    public function getNumberOfCompetitors()
    {
        return $this->numberOfCompetitors;
    }

    /**
     * Sets a new numberOfCompetitors
     *
     * The number of competitors that this course has been assigned to.
     *
     * @param int $numberOfCompetitors
     * @return self
     */
    public function setNumberOfCompetitors($numberOfCompetitors)
    {
        $this->numberOfCompetitors = $numberOfCompetitors;
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
     * The name of the course.
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
     * The name of the course.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as courseFamily
     *
     * The family or group of forked courses that the course is part of.
     *
     * @return string
     */
    public function getCourseFamily()
    {
        return $this->courseFamily;
    }

    /**
     * Sets a new courseFamily
     *
     * The family or group of forked courses that the course is part of.
     *
     * @param string $courseFamily
     * @return self
     */
    public function setCourseFamily($courseFamily)
    {
        $this->courseFamily = $courseFamily;
        return $this;
    }

    /**
     * Gets as length
     *
     * The length of the course, in meters.
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length of the course, in meters.
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as climb
     *
     * The climb of the course, in meters, along the expected best route choice.
     *
     * @return float
     */
    public function getClimb()
    {
        return $this->climb;
    }

    /**
     * Sets a new climb
     *
     * The climb of the course, in meters, along the expected best route choice.
     *
     * @param float $climb
     * @return self
     */
    public function setClimb($climb)
    {
        $this->climb = $climb;
        return $this;
    }

    /**
     * Adds as courseControl
     *
     * The controls, including start and finish, that the course is made up of.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\CourseControlType $courseControl
     */
    public function addToCourseControl(\Petrocki\IofXmlPhp\Model\CourseControlType $courseControl)
    {
        $this->courseControl[] = $courseControl;
        return $this;
    }

    /**
     * isset courseControl
     *
     * The controls, including start and finish, that the course is made up of.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCourseControl($index)
    {
        return isset($this->courseControl[$index]);
    }

    /**
     * unset courseControl
     *
     * The controls, including start and finish, that the course is made up of.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCourseControl($index)
    {
        unset($this->courseControl[$index]);
    }

    /**
     * Gets as courseControl
     *
     * The controls, including start and finish, that the course is made up of.
     *
     * @return \Petrocki\IofXmlPhp\Model\CourseControlType[]
     */
    public function getCourseControl()
    {
        return $this->courseControl;
    }

    /**
     * Sets a new courseControl
     *
     * The controls, including start and finish, that the course is made up of.
     *
     * @param \Petrocki\IofXmlPhp\Model\CourseControlType[] $courseControl
     * @return self
     */
    public function setCourseControl(array $courseControl)
    {
        $this->courseControl = $courseControl;
        return $this;
    }

    /**
     * Gets as mapId
     *
     * The id of the map used for this course.
     *
     * @return int
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * Sets a new mapId
     *
     * The id of the map used for this course.
     *
     * @param int $mapId
     * @return self
     */
    public function setMapId($mapId)
    {
        $this->mapId = $mapId;
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

