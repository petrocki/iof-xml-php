<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing SimpleCourseType
 *
 * Defines a course, excluding controls.
 * XSD Type: SimpleCourse
 */
class SimpleCourseType
{
    /**
     * @var \Petrocki\IofXmlPhp\IdType $id
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
     * The number of controls in the course, excluding start and finish.
     *
     * @var int $numberOfControls
     */
    private $numberOfControls = null;

    /**
     * Gets as id
     *
     * @return \Petrocki\IofXmlPhp\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \Petrocki\IofXmlPhp\IdType $id
     * @return self
     */
    public function setId(?\Petrocki\IofXmlPhp\IdType $id = null)
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
     * Gets as numberOfControls
     *
     * The number of controls in the course, excluding start and finish.
     *
     * @return int
     */
    public function getNumberOfControls()
    {
        return $this->numberOfControls;
    }

    /**
     * Sets a new numberOfControls
     *
     * The number of controls in the course, excluding start and finish.
     *
     * @param int $numberOfControls
     * @return self
     */
    public function setNumberOfControls($numberOfControls)
    {
        $this->numberOfControls = $numberOfControls;
        return $this;
    }
}

