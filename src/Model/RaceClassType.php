<?php

namespace IofXmlPhp\Model;

/**
 * Class representing RaceClassType
 *
 * Information about a class with respect to a race.
 * XSD Type: RaceClass
 */
class RaceClassType
{
    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * The maximum number of competitors that are allowed to take part in the race class. A competitor corresponds to a person (if an individual event) or a team (if a team or relay event). This attribute overrides the maxNumberOfCompetitors attribute in the Class element.
     *
     * @var int $maxNumberOfCompetitors
     */
    private $maxNumberOfCompetitors = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The punching system used for the class at the race. Multiple punching systems can be specified, e.g. one for punch checking and another for timing.
     *
     * @var string[] $punchingSystem
     */
    private $punchingSystem = [
        
    ];

    /**
     * The entry fees for a team as a whole taking part in this class. Use the Fee element to specify a fee for an individual competitor in the team. Use the TeamFee subelement of the Class element to specify a fee on event level.
     *
     * @var \IofXmlPhp\Model\FeeType[] $teamFee
     */
    private $teamFee = [
        
    ];

    /**
     * The entry fees for an individual competitor taking part in the race class. Use the TeamFee element to specify a fee for the team as a whole. Use the Fee subelement of the Class element to specify a fee on event level.
     *
     * @var \IofXmlPhp\Model\FeeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * @var \DateTime $firstStart
     */
    private $firstStart = null;

    /**
     * The status of the race, e.g. if results should be considered invalid due to misplaced constrols.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The courses assigned to this class. For a mass-start event or a relay event, there are usually multiple courses per class due to the usage of spreading methods.
     *
     * @var \IofXmlPhp\Model\SimpleCourseType[] $course
     */
    private $course = [
        
    ];

    /**
     * The controls that are online controls for this class.
     *
     * @var \IofXmlPhp\Model\ControlType[] $onlineControl
     */
    private $onlineControl = [
        
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
     * Gets as maxNumberOfCompetitors
     *
     * The maximum number of competitors that are allowed to take part in the race class. A competitor corresponds to a person (if an individual event) or a team (if a team or relay event). This attribute overrides the maxNumberOfCompetitors attribute in the Class element.
     *
     * @return int
     */
    public function getMaxNumberOfCompetitors()
    {
        return $this->maxNumberOfCompetitors;
    }

    /**
     * Sets a new maxNumberOfCompetitors
     *
     * The maximum number of competitors that are allowed to take part in the race class. A competitor corresponds to a person (if an individual event) or a team (if a team or relay event). This attribute overrides the maxNumberOfCompetitors attribute in the Class element.
     *
     * @param int $maxNumberOfCompetitors
     * @return self
     */
    public function setMaxNumberOfCompetitors($maxNumberOfCompetitors)
    {
        $this->maxNumberOfCompetitors = $maxNumberOfCompetitors;
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
     * Adds as punchingSystem
     *
     * The punching system used for the class at the race. Multiple punching systems can be specified, e.g. one for punch checking and another for timing.
     *
     * @return self
     * @param string $punchingSystem
     */
    public function addToPunchingSystem($punchingSystem)
    {
        $this->punchingSystem[] = $punchingSystem;
        return $this;
    }

    /**
     * isset punchingSystem
     *
     * The punching system used for the class at the race. Multiple punching systems can be specified, e.g. one for punch checking and another for timing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPunchingSystem($index)
    {
        return isset($this->punchingSystem[$index]);
    }

    /**
     * unset punchingSystem
     *
     * The punching system used for the class at the race. Multiple punching systems can be specified, e.g. one for punch checking and another for timing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPunchingSystem($index)
    {
        unset($this->punchingSystem[$index]);
    }

    /**
     * Gets as punchingSystem
     *
     * The punching system used for the class at the race. Multiple punching systems can be specified, e.g. one for punch checking and another for timing.
     *
     * @return string[]
     */
    public function getPunchingSystem()
    {
        return $this->punchingSystem;
    }

    /**
     * Sets a new punchingSystem
     *
     * The punching system used for the class at the race. Multiple punching systems can be specified, e.g. one for punch checking and another for timing.
     *
     * @param string[] $punchingSystem
     * @return self
     */
    public function setPunchingSystem(?array $punchingSystem = null)
    {
        $this->punchingSystem = $punchingSystem;
        return $this;
    }

    /**
     * Adds as teamFee
     *
     * The entry fees for a team as a whole taking part in this class. Use the Fee element to specify a fee for an individual competitor in the team. Use the TeamFee subelement of the Class element to specify a fee on event level.
     *
     * @return self
     * @param \IofXmlPhp\Model\FeeType $teamFee
     */
    public function addToTeamFee(\IofXmlPhp\Model\FeeType $teamFee)
    {
        $this->teamFee[] = $teamFee;
        return $this;
    }

    /**
     * isset teamFee
     *
     * The entry fees for a team as a whole taking part in this class. Use the Fee element to specify a fee for an individual competitor in the team. Use the TeamFee subelement of the Class element to specify a fee on event level.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamFee($index)
    {
        return isset($this->teamFee[$index]);
    }

    /**
     * unset teamFee
     *
     * The entry fees for a team as a whole taking part in this class. Use the Fee element to specify a fee for an individual competitor in the team. Use the TeamFee subelement of the Class element to specify a fee on event level.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamFee($index)
    {
        unset($this->teamFee[$index]);
    }

    /**
     * Gets as teamFee
     *
     * The entry fees for a team as a whole taking part in this class. Use the Fee element to specify a fee for an individual competitor in the team. Use the TeamFee subelement of the Class element to specify a fee on event level.
     *
     * @return \IofXmlPhp\Model\FeeType[]
     */
    public function getTeamFee()
    {
        return $this->teamFee;
    }

    /**
     * Sets a new teamFee
     *
     * The entry fees for a team as a whole taking part in this class. Use the Fee element to specify a fee for an individual competitor in the team. Use the TeamFee subelement of the Class element to specify a fee on event level.
     *
     * @param \IofXmlPhp\Model\FeeType[] $teamFee
     * @return self
     */
    public function setTeamFee(?array $teamFee = null)
    {
        $this->teamFee = $teamFee;
        return $this;
    }

    /**
     * Adds as fee
     *
     * The entry fees for an individual competitor taking part in the race class. Use the TeamFee element to specify a fee for the team as a whole. Use the Fee subelement of the Class element to specify a fee on event level.
     *
     * @return self
     * @param \IofXmlPhp\Model\FeeType $fee
     */
    public function addToFee(\IofXmlPhp\Model\FeeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * The entry fees for an individual competitor taking part in the race class. Use the TeamFee element to specify a fee for the team as a whole. Use the Fee subelement of the Class element to specify a fee on event level.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * The entry fees for an individual competitor taking part in the race class. Use the TeamFee element to specify a fee for the team as a whole. Use the Fee subelement of the Class element to specify a fee on event level.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * The entry fees for an individual competitor taking part in the race class. Use the TeamFee element to specify a fee for the team as a whole. Use the Fee subelement of the Class element to specify a fee on event level.
     *
     * @return \IofXmlPhp\Model\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * The entry fees for an individual competitor taking part in the race class. Use the TeamFee element to specify a fee for the team as a whole. Use the Fee subelement of the Class element to specify a fee on event level.
     *
     * @param \IofXmlPhp\Model\FeeType[] $fee
     * @return self
     */
    public function setFee(?array $fee = null)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Gets as firstStart
     *
     * @return \DateTime
     */
    public function getFirstStart()
    {
        return $this->firstStart;
    }

    /**
     * Sets a new firstStart
     *
     * @param \DateTime $firstStart
     * @return self
     */
    public function setFirstStart(?\DateTime $firstStart = null)
    {
        $this->firstStart = $firstStart;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the race, e.g. if results should be considered invalid due to misplaced constrols.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the race, e.g. if results should be considered invalid due to misplaced constrols.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as course
     *
     * The courses assigned to this class. For a mass-start event or a relay event, there are usually multiple courses per class due to the usage of spreading methods.
     *
     * @return self
     * @param \IofXmlPhp\Model\SimpleCourseType $course
     */
    public function addToCourse(\IofXmlPhp\Model\SimpleCourseType $course)
    {
        $this->course[] = $course;
        return $this;
    }

    /**
     * isset course
     *
     * The courses assigned to this class. For a mass-start event or a relay event, there are usually multiple courses per class due to the usage of spreading methods.
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
     * The courses assigned to this class. For a mass-start event or a relay event, there are usually multiple courses per class due to the usage of spreading methods.
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
     * The courses assigned to this class. For a mass-start event or a relay event, there are usually multiple courses per class due to the usage of spreading methods.
     *
     * @return \IofXmlPhp\Model\SimpleCourseType[]
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * The courses assigned to this class. For a mass-start event or a relay event, there are usually multiple courses per class due to the usage of spreading methods.
     *
     * @param \IofXmlPhp\Model\SimpleCourseType[] $course
     * @return self
     */
    public function setCourse(?array $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as onlineControl
     *
     * The controls that are online controls for this class.
     *
     * @return self
     * @param \IofXmlPhp\Model\ControlType $onlineControl
     */
    public function addToOnlineControl(\IofXmlPhp\Model\ControlType $onlineControl)
    {
        $this->onlineControl[] = $onlineControl;
        return $this;
    }

    /**
     * isset onlineControl
     *
     * The controls that are online controls for this class.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOnlineControl($index)
    {
        return isset($this->onlineControl[$index]);
    }

    /**
     * unset onlineControl
     *
     * The controls that are online controls for this class.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOnlineControl($index)
    {
        unset($this->onlineControl[$index]);
    }

    /**
     * Gets as onlineControl
     *
     * The controls that are online controls for this class.
     *
     * @return \IofXmlPhp\Model\ControlType[]
     */
    public function getOnlineControl()
    {
        return $this->onlineControl;
    }

    /**
     * Sets a new onlineControl
     *
     * The controls that are online controls for this class.
     *
     * @param \IofXmlPhp\Model\ControlType[] $onlineControl
     * @return self
     */
    public function setOnlineControl(?array $onlineControl = null)
    {
        $this->onlineControl = $onlineControl;
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

