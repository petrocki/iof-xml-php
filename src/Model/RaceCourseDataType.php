<?php

namespace IofXmlPhp\Model;

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
     * @var \IofXmlPhp\Model\MapType[] $map
     */
    private $map = [
        
    ];

    /**
     * All controls of the race.
     *
     * @var \IofXmlPhp\Model\ControlType[] $control
     */
    private $control = [
        
    ];

    /**
     * All courses of the race.
     *
     * @var \IofXmlPhp\Model\CourseType[] $course
     */
    private $course = [
        
    ];

    /**
     * The assignment of courses to classes.
     *
     * @var \IofXmlPhp\Model\ClassCourseAssignmentType[] $classCourseAssignment
     */
    private $classCourseAssignment = [
        
    ];

    /**
     * The assignment of courses to individual competitors.
     *
     * @var \IofXmlPhp\Model\PersonCourseAssignmentType[] $personCourseAssignment
     */
    private $personCourseAssignment = [
        
    ];

    /**
     * The assignment of courses to relay team members teams.
     *
     * @var \IofXmlPhp\Model\TeamCourseAssignmentType[] $teamCourseAssignment
     */
    private $teamCourseAssignment = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
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
     * @param \IofXmlPhp\Model\MapType $map
     */
    public function addToMap(\IofXmlPhp\Model\MapType $map)
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
     * @return \IofXmlPhp\Model\MapType[]
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
     * @param \IofXmlPhp\Model\MapType[] $map
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
     * @param \IofXmlPhp\Model\ControlType $control
     */
    public function addToControl(\IofXmlPhp\Model\ControlType $control)
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
     * @return \IofXmlPhp\Model\ControlType[]
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
     * @param \IofXmlPhp\Model\ControlType[] $control
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
     * @param \IofXmlPhp\Model\CourseType $course
     */
    public function addToCourse(\IofXmlPhp\Model\CourseType $course)
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
     * @return \IofXmlPhp\Model\CourseType[]
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
     * @param \IofXmlPhp\Model\CourseType[] $course
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
     * @param \IofXmlPhp\Model\ClassCourseAssignmentType $classCourseAssignment
     */
    public function addToClassCourseAssignment(\IofXmlPhp\Model\ClassCourseAssignmentType $classCourseAssignment)
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
     * @return \IofXmlPhp\Model\ClassCourseAssignmentType[]
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
     * @param \IofXmlPhp\Model\ClassCourseAssignmentType[] $classCourseAssignment
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
     * @param \IofXmlPhp\Model\PersonCourseAssignmentType $personCourseAssignment
     */
    public function addToPersonCourseAssignment(\IofXmlPhp\Model\PersonCourseAssignmentType $personCourseAssignment)
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
     * @return \IofXmlPhp\Model\PersonCourseAssignmentType[]
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
     * @param \IofXmlPhp\Model\PersonCourseAssignmentType[] $personCourseAssignment
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
     * @param \IofXmlPhp\Model\TeamCourseAssignmentType $teamCourseAssignment
     */
    public function addToTeamCourseAssignment(\IofXmlPhp\Model\TeamCourseAssignmentType $teamCourseAssignment)
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
     * @return \IofXmlPhp\Model\TeamCourseAssignmentType[]
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
     * @param \IofXmlPhp\Model\TeamCourseAssignmentType[] $teamCourseAssignment
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

