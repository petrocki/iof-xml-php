<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing PersonCourseAssignmentType
 *
 * Element that connects a course with an individual competitor. Courses should be present in the RaceCourseData element and are matched on course name and/or course family. Persons are matched by 1) BibNumber, 2) EntryId.
 * XSD Type: PersonCourseAssignment
 */
class PersonCourseAssignmentType
{
    /**
     * The id corresponding to this person's entry in an EntryList.
     *
     * @var \Petrocki\IofXmlPhp\IdType $entryId
     */
    private $entryId = null;

    /**
     * The bib number of the person.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * The name of the person.
     *
     * @var string $personName
     */
    private $personName = null;

    /**
     * The name of the class that the person belongs to.
     *
     * @var string $className
     */
    private $className = null;

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
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as entryId
     *
     * The id corresponding to this person's entry in an EntryList.
     *
     * @return \Petrocki\IofXmlPhp\IdType
     */
    public function getEntryId()
    {
        return $this->entryId;
    }

    /**
     * Sets a new entryId
     *
     * The id corresponding to this person's entry in an EntryList.
     *
     * @param \Petrocki\IofXmlPhp\IdType $entryId
     * @return self
     */
    public function setEntryId(?\Petrocki\IofXmlPhp\IdType $entryId = null)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * Gets as bibNumber
     *
     * The bib number of the person.
     *
     * @return string
     */
    public function getBibNumber()
    {
        return $this->bibNumber;
    }

    /**
     * Sets a new bibNumber
     *
     * The bib number of the person.
     *
     * @param string $bibNumber
     * @return self
     */
    public function setBibNumber($bibNumber)
    {
        $this->bibNumber = $bibNumber;
        return $this;
    }

    /**
     * Gets as personName
     *
     * The name of the person.
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * The name of the person.
     *
     * @param string $personName
     * @return self
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as className
     *
     * The name of the class that the person belongs to.
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
     * The name of the class that the person belongs to.
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

