<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing ClassResultType
 *
 * The result list for a single class containing either individual results or team results.
 * XSD Type: ClassResult
 */
class ClassResultType
{
    /**
     * The time resolution of the results, normally 1. For tenths of a second, use 0.1.
     *
     * @var float $timeResolution
     */
    private $timeResolution = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The class that the result list belongs to.
     *
     * @var \Petrocki\IofXmlPhp\ClassType $class
     */
    private $class = null;

    /**
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonResult/Course or TeamResult/TeamMemberResult/Course instead. One element per race.
     *
     * @var \Petrocki\IofXmlPhp\SimpleRaceCourseType[] $course
     */
    private $course = [
        
    ];

    /**
     * Results for individual competitors in the class.
     *
     * @var \Petrocki\IofXmlPhp\PersonResultType[] $personResult
     */
    private $personResult = [
        
    ];

    /**
     * Results for teams in the class.
     *
     * @var \Petrocki\IofXmlPhp\TeamResultType[] $teamResult
     */
    private $teamResult = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as timeResolution
     *
     * The time resolution of the results, normally 1. For tenths of a second, use 0.1.
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
     * The time resolution of the results, normally 1. For tenths of a second, use 0.1.
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
     * The class that the result list belongs to.
     *
     * @return \Petrocki\IofXmlPhp\ClassType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The class that the result list belongs to.
     *
     * @param \Petrocki\IofXmlPhp\ClassType $class
     * @return self
     */
    public function setClass(\Petrocki\IofXmlPhp\ClassType $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as course
     *
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonResult/Course or TeamResult/TeamMemberResult/Course instead. One element per race.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\SimpleRaceCourseType $course
     */
    public function addToCourse(\Petrocki\IofXmlPhp\SimpleRaceCourseType $course)
    {
        $this->course[] = $course;
        return $this;
    }

    /**
     * isset course
     *
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonResult/Course or TeamResult/TeamMemberResult/Course instead. One element per race.
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
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonResult/Course or TeamResult/TeamMemberResult/Course instead. One element per race.
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
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonResult/Course or TeamResult/TeamMemberResult/Course instead. One element per race.
     *
     * @return \Petrocki\IofXmlPhp\SimpleRaceCourseType[]
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * Defines the course assigned to the class. If courses are unique per competitor, use PersonResult/Course or TeamResult/TeamMemberResult/Course instead. One element per race.
     *
     * @param \Petrocki\IofXmlPhp\SimpleRaceCourseType[] $course
     * @return self
     */
    public function setCourse(?array $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as personResult
     *
     * Results for individual competitors in the class.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\PersonResultType $personResult
     */
    public function addToPersonResult(\Petrocki\IofXmlPhp\PersonResultType $personResult)
    {
        $this->personResult[] = $personResult;
        return $this;
    }

    /**
     * isset personResult
     *
     * Results for individual competitors in the class.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonResult($index)
    {
        return isset($this->personResult[$index]);
    }

    /**
     * unset personResult
     *
     * Results for individual competitors in the class.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonResult($index)
    {
        unset($this->personResult[$index]);
    }

    /**
     * Gets as personResult
     *
     * Results for individual competitors in the class.
     *
     * @return \Petrocki\IofXmlPhp\PersonResultType[]
     */
    public function getPersonResult()
    {
        return $this->personResult;
    }

    /**
     * Sets a new personResult
     *
     * Results for individual competitors in the class.
     *
     * @param \Petrocki\IofXmlPhp\PersonResultType[] $personResult
     * @return self
     */
    public function setPersonResult(?array $personResult = null)
    {
        $this->personResult = $personResult;
        return $this;
    }

    /**
     * Adds as teamResult
     *
     * Results for teams in the class.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\TeamResultType $teamResult
     */
    public function addToTeamResult(\Petrocki\IofXmlPhp\TeamResultType $teamResult)
    {
        $this->teamResult[] = $teamResult;
        return $this;
    }

    /**
     * isset teamResult
     *
     * Results for teams in the class.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamResult($index)
    {
        return isset($this->teamResult[$index]);
    }

    /**
     * unset teamResult
     *
     * Results for teams in the class.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamResult($index)
    {
        unset($this->teamResult[$index]);
    }

    /**
     * Gets as teamResult
     *
     * Results for teams in the class.
     *
     * @return \Petrocki\IofXmlPhp\TeamResultType[]
     */
    public function getTeamResult()
    {
        return $this->teamResult;
    }

    /**
     * Sets a new teamResult
     *
     * Results for teams in the class.
     *
     * @param \Petrocki\IofXmlPhp\TeamResultType[] $teamResult
     * @return self
     */
    public function setTeamResult(?array $teamResult = null)
    {
        $this->teamResult = $teamResult;
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

