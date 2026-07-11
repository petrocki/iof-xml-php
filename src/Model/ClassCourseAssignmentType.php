<?php

namespace IofXmlPhp\Model;

/**
 * Class representing ClassCourseAssignmentType
 *
 * Element that connects a course with a class. Courses should be present in the RaceCourseData element and are matched on course name and/or course family. Classes are matched by 1) Id, 2) Name.
 * XSD Type: ClassCourseAssignment
 */
class ClassCourseAssignmentType
{
    /**
     * The number of competitors in the class. A competitor corresponds to a person (if an individual event) or a team (if a team or relay event).
     *
     * @var int $numberOfCompetitors
     */
    private $numberOfCompetitors = null;

    /**
     * The id of the class.
     *
     * @var \IofXmlPhp\Model\IdType $classId
     */
    private $classId = null;

    /**
     * The name of the class.
     *
     * @var string $className
     */
    private $className = null;

    /**
     * The legs that the course can be assigned to in a relay class. This element can be omitted for individual classes.
     *
     * @var int[] $allowedOnLeg
     */
    private $allowedOnLeg = [
        
    ];

    /**
     * The name of the course.
     *
     * @var string $courseName
     */
    private $courseName = null;

    /**
     * The family or group of forked courses that the course is part of.
     *
     * @var string $courseFamily
     */
    private $courseFamily = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as numberOfCompetitors
     *
     * The number of competitors in the class. A competitor corresponds to a person (if an individual event) or a team (if a team or relay event).
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
     * The number of competitors in the class. A competitor corresponds to a person (if an individual event) or a team (if a team or relay event).
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
     * Gets as classId
     *
     * The id of the class.
     *
     * @return \IofXmlPhp\Model\IdType
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Sets a new classId
     *
     * The id of the class.
     *
     * @param \IofXmlPhp\Model\IdType $classId
     * @return self
     */
    public function setClassId(?\IofXmlPhp\Model\IdType $classId = null)
    {
        $this->classId = $classId;
        return $this;
    }

    /**
     * Gets as className
     *
     * The name of the class.
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Sets a new className
     *
     * The name of the class.
     *
     * @param string $className
     * @return self
     */
    public function setClassName($className)
    {
        $this->className = $className;
        return $this;
    }

    /**
     * Adds as allowedOnLeg
     *
     * The legs that the course can be assigned to in a relay class. This element can be omitted for individual classes.
     *
     * @return self
     * @param int $allowedOnLeg
     */
    public function addToAllowedOnLeg($allowedOnLeg)
    {
        $this->allowedOnLeg[] = $allowedOnLeg;
        return $this;
    }

    /**
     * isset allowedOnLeg
     *
     * The legs that the course can be assigned to in a relay class. This element can be omitted for individual classes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedOnLeg($index)
    {
        return isset($this->allowedOnLeg[$index]);
    }

    /**
     * unset allowedOnLeg
     *
     * The legs that the course can be assigned to in a relay class. This element can be omitted for individual classes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedOnLeg($index)
    {
        unset($this->allowedOnLeg[$index]);
    }

    /**
     * Gets as allowedOnLeg
     *
     * The legs that the course can be assigned to in a relay class. This element can be omitted for individual classes.
     *
     * @return int[]
     */
    public function getAllowedOnLeg()
    {
        return $this->allowedOnLeg;
    }

    /**
     * Sets a new allowedOnLeg
     *
     * The legs that the course can be assigned to in a relay class. This element can be omitted for individual classes.
     *
     * @param int[] $allowedOnLeg
     * @return self
     */
    public function setAllowedOnLeg(?array $allowedOnLeg = null)
    {
        $this->allowedOnLeg = $allowedOnLeg;
        return $this;
    }

    /**
     * Gets as courseName
     *
     * The name of the course.
     *
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Sets a new courseName
     *
     * The name of the course.
     *
     * @param string $courseName
     * @return self
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
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

