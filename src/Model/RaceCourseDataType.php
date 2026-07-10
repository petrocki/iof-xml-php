<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing RaceCourseDataType
 *
 * This element defines all the control and course information for a race.
 * XSD Type: RaceCourseData
 */
class RaceCourseDataType
{
    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * The map(s) used in this race. Usually just one map, but different courses may use different scales and/or areas.
     *
     * @var \Petrocki\IofXmlPhp\Model\MapType[] $map
     */
    private $map = [
        
    ];

    /**
     * All controls of the race.
     *
     * @var \Petrocki\IofXmlPhp\Model\ControlType[] $control
     */
    private $control = [
        
    ];

    /**
     * All courses of the race.
     *
     * @var \Petrocki\IofXmlPhp\Model\CourseType[] $course
     */
    private $course = [
        
    ];

    /**
     * The assignment of courses to classes.
     *
     * @var \Petrocki\IofXmlPhp\Model\ClassCourseAssignmentType[] $classCourseAssignment
     */
    private $classCourseAssignment = [
        
    ];

    /**
     * The assignment of courses to individual competitors.
     *
     * @var \Petrocki\IofXmlPhp\Model\PersonCourseAssignmentType[] $personCourseAssignment
     */
    private $personCourseAssignment = [
        
    ];

    /**
     * The assignment of courses to relay team members teams.
     *
     * @var \Petrocki\IofXmlPhp\Model\TeamCourseAssignmentType[] $teamCourseAssignment
     */
    private $teamCourseAssignment = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as raceNumber
     *
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @return int
     */
    public function getRaceNumber()
    {
        return $this->raceNumber;
    }

    /**
     * Sets a new raceNumber
     *
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @param int $raceNumber
     * @return self
     */
    public function setRaceNumber($raceNumber)
    {
        $this->raceNumber = $raceNumber;
        return $this;
    }

    /**
     * Adds as map
     *
     * The map(s) used in this race. Usually just one map, but different courses may use different scales and/or areas.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\MapType $map
     */
    public function addToMap(\Petrocki\IofXmlPhp\Model\MapType $map)
    {
        $this->map[] = $map;
        return $this;
    }

    /**
     * isset map
     *
     * The map(s) used in this race. Usually just one map, but different courses may use different scales and/or areas.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMap($index)
    {
        return isset($this->map[$index]);
    }

    /**
     * unset map
     *
     * The map(s) used in this race. Usually just one map, but different courses may use different scales and/or areas.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMap($index)
    {
        unset($this->map[$index]);
    }

    /**
     * Gets as map
     *
     * The map(s) used in this race. Usually just one map, but different courses may use different scales and/or areas.
     *
     * @return \Petrocki\IofXmlPhp\Model\MapType[]
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Sets a new map
     *
     * The map(s) used in this race. Usually just one map, but different courses may use different scales and/or areas.
     *
     * @param \Petrocki\IofXmlPhp\Model\MapType[] $map
     * @return self
     */
    public function setMap(?array $map = null)
    {
        $this->map = $map;
        return $this;
    }

    /**
     * Adds as control
     *
     * All controls of the race.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ControlType $control
     */
    public function addToControl(\Petrocki\IofXmlPhp\Model\ControlType $control)
    {
        $this->control[] = $control;
        return $this;
    }

    /**
     * isset control
     *
     * All controls of the race.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControl($index)
    {
        return isset($this->control[$index]);
    }

    /**
     * unset control
     *
     * All controls of the race.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControl($index)
    {
        unset($this->control[$index]);
    }

    /**
     * Gets as control
     *
     * All controls of the race.
     *
     * @return \Petrocki\IofXmlPhp\Model\ControlType[]
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Sets a new control
     *
     * All controls of the race.
     *
     * @param \Petrocki\IofXmlPhp\Model\ControlType[] $control
     * @return self
     */
    public function setControl(?array $control = null)
    {
        $this->control = $control;
        return $this;
    }

    /**
     * Adds as course
     *
     * All courses of the race.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\CourseType $course
     */
    public function addToCourse(\Petrocki\IofXmlPhp\Model\CourseType $course)
    {
        $this->course[] = $course;
        return $this;
    }

    /**
     * isset course
     *
     * All courses of the race.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCourse($index)
    {
        return isset($this->course[$index]);
    }

    /**
     * unset course
     *
     * All courses of the race.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCourse($index)
    {
        unset($this->course[$index]);
    }

    /**
     * Gets as course
     *
     * All courses of the race.
     *
     * @return \Petrocki\IofXmlPhp\Model\CourseType[]
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * All courses of the race.
     *
     * @param \Petrocki\IofXmlPhp\Model\CourseType[] $course
     * @return self
     */
    public function setCourse(?array $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as classCourseAssignment
     *
     * The assignment of courses to classes.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ClassCourseAssignmentType $classCourseAssignment
     */
    public function addToClassCourseAssignment(\Petrocki\IofXmlPhp\Model\ClassCourseAssignmentType $classCourseAssignment)
    {
        $this->classCourseAssignment[] = $classCourseAssignment;
        return $this;
    }

    /**
     * isset classCourseAssignment
     *
     * The assignment of courses to classes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassCourseAssignment($index)
    {
        return isset($this->classCourseAssignment[$index]);
    }

    /**
     * unset classCourseAssignment
     *
     * The assignment of courses to classes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassCourseAssignment($index)
    {
        unset($this->classCourseAssignment[$index]);
    }

    /**
     * Gets as classCourseAssignment
     *
     * The assignment of courses to classes.
     *
     * @return \Petrocki\IofXmlPhp\Model\ClassCourseAssignmentType[]
     */
    public function getClassCourseAssignment()
    {
        return $this->classCourseAssignment;
    }

    /**
     * Sets a new classCourseAssignment
     *
     * The assignment of courses to classes.
     *
     * @param \Petrocki\IofXmlPhp\Model\ClassCourseAssignmentType[] $classCourseAssignment
     * @return self
     */
    public function setClassCourseAssignment(?array $classCourseAssignment = null)
    {
        $this->classCourseAssignment = $classCourseAssignment;
        return $this;
    }

    /**
     * Adds as personCourseAssignment
     *
     * The assignment of courses to individual competitors.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\PersonCourseAssignmentType $personCourseAssignment
     */
    public function addToPersonCourseAssignment(\Petrocki\IofXmlPhp\Model\PersonCourseAssignmentType $personCourseAssignment)
    {
        $this->personCourseAssignment[] = $personCourseAssignment;
        return $this;
    }

    /**
     * isset personCourseAssignment
     *
     * The assignment of courses to individual competitors.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonCourseAssignment($index)
    {
        return isset($this->personCourseAssignment[$index]);
    }

    /**
     * unset personCourseAssignment
     *
     * The assignment of courses to individual competitors.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonCourseAssignment($index)
    {
        unset($this->personCourseAssignment[$index]);
    }

    /**
     * Gets as personCourseAssignment
     *
     * The assignment of courses to individual competitors.
     *
     * @return \Petrocki\IofXmlPhp\Model\PersonCourseAssignmentType[]
     */
    public function getPersonCourseAssignment()
    {
        return $this->personCourseAssignment;
    }

    /**
     * Sets a new personCourseAssignment
     *
     * The assignment of courses to individual competitors.
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonCourseAssignmentType[] $personCourseAssignment
     * @return self
     */
    public function setPersonCourseAssignment(?array $personCourseAssignment = null)
    {
        $this->personCourseAssignment = $personCourseAssignment;
        return $this;
    }

    /**
     * Adds as teamCourseAssignment
     *
     * The assignment of courses to relay team members teams.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\TeamCourseAssignmentType $teamCourseAssignment
     */
    public function addToTeamCourseAssignment(\Petrocki\IofXmlPhp\Model\TeamCourseAssignmentType $teamCourseAssignment)
    {
        $this->teamCourseAssignment[] = $teamCourseAssignment;
        return $this;
    }

    /**
     * isset teamCourseAssignment
     *
     * The assignment of courses to relay team members teams.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamCourseAssignment($index)
    {
        return isset($this->teamCourseAssignment[$index]);
    }

    /**
     * unset teamCourseAssignment
     *
     * The assignment of courses to relay team members teams.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamCourseAssignment($index)
    {
        unset($this->teamCourseAssignment[$index]);
    }

    /**
     * Gets as teamCourseAssignment
     *
     * The assignment of courses to relay team members teams.
     *
     * @return \Petrocki\IofXmlPhp\Model\TeamCourseAssignmentType[]
     */
    public function getTeamCourseAssignment()
    {
        return $this->teamCourseAssignment;
    }

    /**
     * Sets a new teamCourseAssignment
     *
     * The assignment of courses to relay team members teams.
     *
     * @param \Petrocki\IofXmlPhp\Model\TeamCourseAssignmentType[] $teamCourseAssignment
     * @return self
     */
    public function setTeamCourseAssignment(?array $teamCourseAssignment = null)
    {
        $this->teamCourseAssignment = $teamCourseAssignment;
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

