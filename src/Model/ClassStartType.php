<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing ClassStartType
 *
 * The start list of a single class containing either individual start times or team start times.
 * XSD Type: ClassStart
 */
class ClassStartType
{
    /**
     * The time resolution of the start times, normally 1. For tenths of a second, use 0.1.
     *
     * @var float $timeResolution
     */
    private $timeResolution = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The class that the start list belongs to.
     *
     * @var \Petrocki\IofXmlPhp\Model\ClassType $class
     */
    private $class = null;

    /**
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonStart/Course or TeamStart/TeamMemberStart/Course instead. One element per race.
     *
     * @var \Petrocki\IofXmlPhp\Model\SimpleRaceCourseType[] $course
     */
    private $course = [
        
    ];

    /**
     * Defines the name of the start place (e.g. Start 1), if the race has multiple start places. One element per race.
     *
     * @var \Petrocki\IofXmlPhp\Model\StartNameType[] $startName
     */
    private $startName = [
        
    ];

    /**
     * Start times for individual competitors in the class.
     *
     * @var \Petrocki\IofXmlPhp\Model\PersonStartType[] $personStart
     */
    private $personStart = [
        
    ];

    /**
     * Start times for teams in the class.
     *
     * @var \Petrocki\IofXmlPhp\Model\TeamStartType[] $teamStart
     */
    private $teamStart = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as timeResolution
     *
     * The time resolution of the start times, normally 1. For tenths of a second, use 0.1.
     *
     * @return float
     */
    public function getTimeResolution()
    {
        return $this->timeResolution;
    }

    /**
     * Sets a new timeResolution
     *
     * The time resolution of the start times, normally 1. For tenths of a second, use 0.1.
     *
     * @param float $timeResolution
     * @return self
     */
    public function setTimeResolution($timeResolution)
    {
        $this->timeResolution = $timeResolution;
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
     * Gets as class
     *
     * The class that the start list belongs to.
     *
     * @return \Petrocki\IofXmlPhp\Model\ClassType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The class that the start list belongs to.
     *
     * @param \Petrocki\IofXmlPhp\Model\ClassType $class
     * @return self
     */
    public function setClass(\Petrocki\IofXmlPhp\Model\ClassType $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as course
     *
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonStart/Course or TeamStart/TeamMemberStart/Course instead. One element per race.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\SimpleRaceCourseType $course
     */
    public function addToCourse(\Petrocki\IofXmlPhp\Model\SimpleRaceCourseType $course)
    {
        $this->course[] = $course;
        return $this;
    }

    /**
     * isset course
     *
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonStart/Course or TeamStart/TeamMemberStart/Course instead. One element per race.
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
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonStart/Course or TeamStart/TeamMemberStart/Course instead. One element per race.
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
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonStart/Course or TeamStart/TeamMemberStart/Course instead. One element per race.
     *
     * @return \Petrocki\IofXmlPhp\Model\SimpleRaceCourseType[]
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonStart/Course or TeamStart/TeamMemberStart/Course instead. One element per race.
     *
     * @param \Petrocki\IofXmlPhp\Model\SimpleRaceCourseType[] $course
     * @return self
     */
    public function setCourse(?array $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as startName
     *
     * Defines the name of the start place (e.g. Start 1), if the race has multiple start places. One element per race.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\StartNameType $startName
     */
    public function addToStartName(\Petrocki\IofXmlPhp\Model\StartNameType $startName)
    {
        $this->startName[] = $startName;
        return $this;
    }

    /**
     * isset startName
     *
     * Defines the name of the start place (e.g. Start 1), if the race has multiple start places. One element per race.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStartName($index)
    {
        return isset($this->startName[$index]);
    }

    /**
     * unset startName
     *
     * Defines the name of the start place (e.g. Start 1), if the race has multiple start places. One element per race.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStartName($index)
    {
        unset($this->startName[$index]);
    }

    /**
     * Gets as startName
     *
     * Defines the name of the start place (e.g. Start 1), if the race has multiple start places. One element per race.
     *
     * @return \Petrocki\IofXmlPhp\Model\StartNameType[]
     */
    public function getStartName()
    {
        return $this->startName;
    }

    /**
     * Sets a new startName
     *
     * Defines the name of the start place (e.g. Start 1), if the race has multiple start places. One element per race.
     *
     * @param \Petrocki\IofXmlPhp\Model\StartNameType[] $startName
     * @return self
     */
    public function setStartName(?array $startName = null)
    {
        $this->startName = $startName;
        return $this;
    }

    /**
     * Adds as personStart
     *
     * Start times for individual competitors in the class.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\PersonStartType $personStart
     */
    public function addToPersonStart(\Petrocki\IofXmlPhp\Model\PersonStartType $personStart)
    {
        $this->personStart[] = $personStart;
        return $this;
    }

    /**
     * isset personStart
     *
     * Start times for individual competitors in the class.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonStart($index)
    {
        return isset($this->personStart[$index]);
    }

    /**
     * unset personStart
     *
     * Start times for individual competitors in the class.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonStart($index)
    {
        unset($this->personStart[$index]);
    }

    /**
     * Gets as personStart
     *
     * Start times for individual competitors in the class.
     *
     * @return \Petrocki\IofXmlPhp\Model\PersonStartType[]
     */
    public function getPersonStart()
    {
        return $this->personStart;
    }

    /**
     * Sets a new personStart
     *
     * Start times for individual competitors in the class.
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonStartType[] $personStart
     * @return self
     */
    public function setPersonStart(?array $personStart = null)
    {
        $this->personStart = $personStart;
        return $this;
    }

    /**
     * Adds as teamStart
     *
     * Start times for teams in the class.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\TeamStartType $teamStart
     */
    public function addToTeamStart(\Petrocki\IofXmlPhp\Model\TeamStartType $teamStart)
    {
        $this->teamStart[] = $teamStart;
        return $this;
    }

    /**
     * isset teamStart
     *
     * Start times for teams in the class.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamStart($index)
    {
        return isset($this->teamStart[$index]);
    }

    /**
     * unset teamStart
     *
     * Start times for teams in the class.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamStart($index)
    {
        unset($this->teamStart[$index]);
    }

    /**
     * Gets as teamStart
     *
     * Start times for teams in the class.
     *
     * @return \Petrocki\IofXmlPhp\Model\TeamStartType[]
     */
    public function getTeamStart()
    {
        return $this->teamStart;
    }

    /**
     * Sets a new teamStart
     *
     * Start times for teams in the class.
     *
     * @param \Petrocki\IofXmlPhp\Model\TeamStartType[] $teamStart
     * @return self
     */
    public function setTeamStart(?array $teamStart = null)
    {
        $this->teamStart = $teamStart;
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

