<?php

namespace IofXmlPhp\Model;

/**
 * Class representing PersonRaceResultType
 *
 * Result information for a person in a race.
 * XSD Type: PersonRaceResult
 */
class PersonRaceResultType
{
    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * The bib number that the person that the result belongs to is wearing.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * The time when the person that the result belongs to started, expressed in ISO 8601 format.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time when the person that the result belongs to finished, expressed in ISO 8601 format.
     *
     * @var \DateTime $finishTime
     */
    private $finishTime = null;

    /**
     * The time, in seconds, that is shown in the result list. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var float $time
     */
    private $time = null;

    /**
     * The time, in seconds, that the the person is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var float $timeBehind
     */
    private $timeBehind = null;

    /**
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @var int $position
     */
    private $position = null;

    /**
     * The status of the result.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @var \IofXmlPhp\Model\ScoreType[] $score
     */
    private $score = [
        
    ];

    /**
     * Holds the overall result for the person after the current race for a multi-race event.
     *
     * @var \IofXmlPhp\Model\OverallResultType $overallResult
     */
    private $overallResult = null;

    /**
     * Defines the course assigned to the person.
     *
     * @var \IofXmlPhp\Model\SimpleCourseType $course
     */
    private $course = null;

    /**
     * Contains the times at each control of the course. Each control of the competitor's course (if known) has to be defined in a SplitTime element, even if the control has not been punched or if the competitor has not started. Start and finish times must not be present as SplitTime elements.
     *
     * @var \IofXmlPhp\Model\SplitTimeType[] $splitTime
     */
    private $splitTime = [
        
    ];

    /**
     * Defines the answer for a trail-O control.
     *
     * @var \IofXmlPhp\Model\ControlAnswerType[] $controlAnswer
     */
    private $controlAnswer = [
        
    ];

    /**
     * Defines the person's route recorded by a tracking device.
     *
     * @var string $route
     */
    private $route = null;

    /**
     * Defines the control card assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @var \IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Defines the fees that the person has been assigned.
     *
     * @var \IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the person.
     *
     * @var \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
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
     * Gets as bibNumber
     *
     * The bib number that the person that the result belongs to is wearing.
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
     * The bib number that the person that the result belongs to is wearing.
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
     * Gets as startTime
     *
     * The time when the person that the result belongs to started, expressed in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time when the person that the result belongs to started, expressed in ISO 8601 format.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(?\DateTime $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as finishTime
     *
     * The time when the person that the result belongs to finished, expressed in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->finishTime;
    }

    /**
     * Sets a new finishTime
     *
     * The time when the person that the result belongs to finished, expressed in ISO 8601 format.
     *
     * @param \DateTime $finishTime
     * @return self
     */
    public function setFinishTime(?\DateTime $finishTime = null)
    {
        $this->finishTime = $finishTime;
        return $this;
    }

    /**
     * Gets as time
     *
     * The time, in seconds, that is shown in the result list. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @return float
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * The time, in seconds, that is shown in the result list. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @param float $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as timeBehind
     *
     * The time, in seconds, that the the person is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @return float
     */
    public function getTimeBehind()
    {
        return $this->timeBehind;
    }

    /**
     * Sets a new timeBehind
     *
     * The time, in seconds, that the the person is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @param float $timeBehind
     * @return self
     */
    public function setTimeBehind($timeBehind)
    {
        $this->timeBehind = $timeBehind;
        return $this;
    }

    /**
     * Gets as position
     *
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the result.
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
     * The status of the result.
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
     * Adds as score
     *
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @return self
     * @param \IofXmlPhp\Model\ScoreType $score
     */
    public function addToScore(\IofXmlPhp\Model\ScoreType $score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * isset score
     *
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScore($index)
    {
        return isset($this->score[$index]);
    }

    /**
     * unset score
     *
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScore($index)
    {
        unset($this->score[$index]);
    }

    /**
     * Gets as score
     *
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @return \IofXmlPhp\Model\ScoreType[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @param \IofXmlPhp\Model\ScoreType[] $score
     * @return self
     */
    public function setScore(?array $score = null)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as overallResult
     *
     * Holds the overall result for the person after the current race for a multi-race event.
     *
     * @return \IofXmlPhp\Model\OverallResultType
     */
    public function getOverallResult()
    {
        return $this->overallResult;
    }

    /**
     * Sets a new overallResult
     *
     * Holds the overall result for the person after the current race for a multi-race event.
     *
     * @param \IofXmlPhp\Model\OverallResultType $overallResult
     * @return self
     */
    public function setOverallResult(?\IofXmlPhp\Model\OverallResultType $overallResult = null)
    {
        $this->overallResult = $overallResult;
        return $this;
    }

    /**
     * Gets as course
     *
     * Defines the course assigned to the person.
     *
     * @return \IofXmlPhp\Model\SimpleCourseType
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * Defines the course assigned to the person.
     *
     * @param \IofXmlPhp\Model\SimpleCourseType $course
     * @return self
     */
    public function setCourse(?\IofXmlPhp\Model\SimpleCourseType $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as splitTime
     *
     * Contains the times at each control of the course. Each control of the competitor's course (if known) has to be defined in a SplitTime element, even if the control has not been punched or if the competitor has not started. Start and finish times must not be present as SplitTime elements.
     *
     * @return self
     * @param \IofXmlPhp\Model\SplitTimeType $splitTime
     */
    public function addToSplitTime(\IofXmlPhp\Model\SplitTimeType $splitTime)
    {
        $this->splitTime[] = $splitTime;
        return $this;
    }

    /**
     * isset splitTime
     *
     * Contains the times at each control of the course. Each control of the competitor's course (if known) has to be defined in a SplitTime element, even if the control has not been punched or if the competitor has not started. Start and finish times must not be present as SplitTime elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSplitTime($index)
    {
        return isset($this->splitTime[$index]);
    }

    /**
     * unset splitTime
     *
     * Contains the times at each control of the course. Each control of the competitor's course (if known) has to be defined in a SplitTime element, even if the control has not been punched or if the competitor has not started. Start and finish times must not be present as SplitTime elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSplitTime($index)
    {
        unset($this->splitTime[$index]);
    }

    /**
     * Gets as splitTime
     *
     * Contains the times at each control of the course. Each control of the competitor's course (if known) has to be defined in a SplitTime element, even if the control has not been punched or if the competitor has not started. Start and finish times must not be present as SplitTime elements.
     *
     * @return \IofXmlPhp\Model\SplitTimeType[]
     */
    public function getSplitTime()
    {
        return $this->splitTime;
    }

    /**
     * Sets a new splitTime
     *
     * Contains the times at each control of the course. Each control of the competitor's course (if known) has to be defined in a SplitTime element, even if the control has not been punched or if the competitor has not started. Start and finish times must not be present as SplitTime elements.
     *
     * @param \IofXmlPhp\Model\SplitTimeType[] $splitTime
     * @return self
     */
    public function setSplitTime(?array $splitTime = null)
    {
        $this->splitTime = $splitTime;
        return $this;
    }

    /**
     * Adds as controlAnswer
     *
     * Defines the answer for a trail-O control.
     *
     * @return self
     * @param \IofXmlPhp\Model\ControlAnswerType $controlAnswer
     */
    public function addToControlAnswer(\IofXmlPhp\Model\ControlAnswerType $controlAnswer)
    {
        $this->controlAnswer[] = $controlAnswer;
        return $this;
    }

    /**
     * isset controlAnswer
     *
     * Defines the answer for a trail-O control.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControlAnswer($index)
    {
        return isset($this->controlAnswer[$index]);
    }

    /**
     * unset controlAnswer
     *
     * Defines the answer for a trail-O control.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControlAnswer($index)
    {
        unset($this->controlAnswer[$index]);
    }

    /**
     * Gets as controlAnswer
     *
     * Defines the answer for a trail-O control.
     *
     * @return \IofXmlPhp\Model\ControlAnswerType[]
     */
    public function getControlAnswer()
    {
        return $this->controlAnswer;
    }

    /**
     * Sets a new controlAnswer
     *
     * Defines the answer for a trail-O control.
     *
     * @param \IofXmlPhp\Model\ControlAnswerType[] $controlAnswer
     * @return self
     */
    public function setControlAnswer(?array $controlAnswer = null)
    {
        $this->controlAnswer = $controlAnswer;
        return $this;
    }

    /**
     * Gets as route
     *
     * Defines the person's route recorded by a tracking device.
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * Defines the person's route recorded by a tracking device.
     *
     * @param string $route
     * @return self
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * Defines the control card assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return self
     * @param \IofXmlPhp\Model\ControlCardType $controlCard
     */
    public function addToControlCard(\IofXmlPhp\Model\ControlCardType $controlCard)
    {
        $this->controlCard[] = $controlCard;
        return $this;
    }

    /**
     * isset controlCard
     *
     * Defines the control card assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControlCard($index)
    {
        return isset($this->controlCard[$index]);
    }

    /**
     * unset controlCard
     *
     * Defines the control card assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControlCard($index)
    {
        unset($this->controlCard[$index]);
    }

    /**
     * Gets as controlCard
     *
     * Defines the control card assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @return \IofXmlPhp\Model\ControlCardType[]
     */
    public function getControlCard()
    {
        return $this->controlCard;
    }

    /**
     * Sets a new controlCard
     *
     * Defines the control card assigned to the person. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param \IofXmlPhp\Model\ControlCardType[] $controlCard
     * @return self
     */
    public function setControlCard(?array $controlCard = null)
    {
        $this->controlCard = $controlCard;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @return self
     * @param \IofXmlPhp\Model\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\IofXmlPhp\Model\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedFee($index)
    {
        return isset($this->assignedFee[$index]);
    }

    /**
     * unset assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedFee($index)
    {
        unset($this->assignedFee[$index]);
    }

    /**
     * Gets as assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @return \IofXmlPhp\Model\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * Defines the fees that the person has been assigned.
     *
     * @param \IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     * @return self
     */
    public function setAssignedFee(?array $assignedFee = null)
    {
        $this->assignedFee = $assignedFee;
        return $this;
    }

    /**
     * Adds as serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @return self
     * @param \IofXmlPhp\Model\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\IofXmlPhp\Model\ServiceRequestType $serviceRequest)
    {
        $this->serviceRequest[] = $serviceRequest;
        return $this;
    }

    /**
     * isset serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRequest($index)
    {
        return isset($this->serviceRequest[$index]);
    }

    /**
     * unset serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRequest($index)
    {
        unset($this->serviceRequest[$index]);
    }

    /**
     * Gets as serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @return \IofXmlPhp\Model\ServiceRequestType[]
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * Defines the services requested by the person.
     *
     * @param \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     * @return self
     */
    public function setServiceRequest(?array $serviceRequest = null)
    {
        $this->serviceRequest = $serviceRequest;
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

