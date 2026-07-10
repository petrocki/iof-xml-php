<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing TeamMemberRaceResultType
 *
 * Result information for a person in a race.
 * XSD Type: TeamMemberRaceResult
 */
class TeamMemberRaceResultType
{
    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * In case of a relay, this is the number of the leg that the team member takes part in.
     *
     * @var int $leg
     */
    private $leg = null;

    /**
     * In case of a relay with parallel legs, this defines the team member's starting order of the leg within the team.
     *
     * @var int $legOrder
     */
    private $legOrder = null;

    /**
     * The bib number that the team member that the result belongs to is wearing.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * The time when the team member that the result belongs to started, expressed in ISO 8601 format.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time when the team member that the result belongs to finished, expressed in ISO 8601 format.
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
     * The time, in seconds, that the the team member is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\TimeBehindAType[] $timeBehind
     */
    private $timeBehind = [
        
    ];

    /**
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @var \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\PositionAType[] $position
     */
    private $position = [
        
    ];

    /**
     * The status of the result.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Any scores that are attached to the result, e.g. World Ranking points.
     *
     * @var \Petrocki\IofXmlPhp\Model\ScoreType[] $score
     */
    private $score = [
        
    ];

    /**
     * Holds the result after the current leg for the team.
     *
     * @var \Petrocki\IofXmlPhp\Model\OverallResultType $overallResult
     */
    private $overallResult = null;

    /**
     * Defines the course assigned to the person.
     *
     * @var \Petrocki\IofXmlPhp\Model\SimpleCourseType $course
     */
    private $course = null;

    /**
     * Contains the times at each control of the course. Each control of the team member's course has to be defined in a SplitTime element, even if the control has not been punched. Start and finish times must not be present as SplitTime elements.
     *
     * @var \Petrocki\IofXmlPhp\Model\SplitTimeType[] $splitTime
     */
    private $splitTime = [
        
    ];

    /**
     * Defines the answer for a trail-O control.
     *
     * @var \Petrocki\IofXmlPhp\Model\ControlAnswerType[] $controlAnswer
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
     * @var \Petrocki\IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Defines the fees that the team member has been assigned.
     *
     * @var \Petrocki\IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Defines the services requested by the team member.
     *
     * @var \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
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
     * Gets as leg
     *
     * In case of a relay, this is the number of the leg that the team member takes part in.
     *
     * @return int
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Sets a new leg
     *
     * In case of a relay, this is the number of the leg that the team member takes part in.
     *
     * @param int $leg
     * @return self
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;
        return $this;
    }

    /**
     * Gets as legOrder
     *
     * In case of a relay with parallel legs, this defines the team member's starting order of the leg within the team.
     *
     * @return int
     */
    public function getLegOrder()
    {
        return $this->legOrder;
    }

    /**
     * Sets a new legOrder
     *
     * In case of a relay with parallel legs, this defines the team member's starting order of the leg within the team.
     *
     * @param int $legOrder
     * @return self
     */
    public function setLegOrder($legOrder)
    {
        $this->legOrder = $legOrder;
        return $this;
    }

    /**
     * Gets as bibNumber
     *
     * The bib number that the team member that the result belongs to is wearing.
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
     * The bib number that the team member that the result belongs to is wearing.
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
     * The time when the team member that the result belongs to started, expressed in ISO 8601 format.
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
     * The time when the team member that the result belongs to started, expressed in ISO 8601 format.
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
     * The time when the team member that the result belongs to finished, expressed in ISO 8601 format.
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
     * The time when the team member that the result belongs to finished, expressed in ISO 8601 format.
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
     * Adds as timeBehind
     *
     * The time, in seconds, that the the team member is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\TimeBehindAType $timeBehind
     */
    public function addToTimeBehind(\Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\TimeBehindAType $timeBehind)
    {
        $this->timeBehind[] = $timeBehind;
        return $this;
    }

    /**
     * isset timeBehind
     *
     * The time, in seconds, that the the team member is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeBehind($index)
    {
        return isset($this->timeBehind[$index]);
    }

    /**
     * unset timeBehind
     *
     * The time, in seconds, that the the team member is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeBehind($index)
    {
        unset($this->timeBehind[$index]);
    }

    /**
     * Gets as timeBehind
     *
     * The time, in seconds, that the the team member is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @return \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\TimeBehindAType[]
     */
    public function getTimeBehind()
    {
        return $this->timeBehind;
    }

    /**
     * Sets a new timeBehind
     *
     * The time, in seconds, that the the team member is behind the winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @param \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\TimeBehindAType[] $timeBehind
     * @return self
     */
    public function setTimeBehind(?array $timeBehind = null)
    {
        $this->timeBehind = $timeBehind;
        return $this;
    }

    /**
     * Adds as position
     *
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\PositionAType $position
     */
    public function addToPosition(\Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\PositionAType $position)
    {
        $this->position[] = $position;
        return $this;
    }

    /**
     * isset position
     *
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPosition($index)
    {
        return isset($this->position[$index]);
    }

    /**
     * unset position
     *
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPosition($index)
    {
        unset($this->position[$index]);
    }

    /**
     * Gets as position
     *
     * The position in the result list for the person that the result belongs to. This element should only be present when the Status element is set to OK.
     *
     * @return \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\PositionAType[]
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
     * @param \Petrocki\IofXmlPhp\Model\TeamMemberRaceResultType\PositionAType[] $position
     * @return self
     */
    public function setPosition(?array $position = null)
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
     * @param \Petrocki\IofXmlPhp\Model\ScoreType $score
     */
    public function addToScore(\Petrocki\IofXmlPhp\Model\ScoreType $score)
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
     * @return \Petrocki\IofXmlPhp\Model\ScoreType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ScoreType[] $score
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
     * Holds the result after the current leg for the team.
     *
     * @return \Petrocki\IofXmlPhp\Model\OverallResultType
     */
    public function getOverallResult()
    {
        return $this->overallResult;
    }

    /**
     * Sets a new overallResult
     *
     * Holds the result after the current leg for the team.
     *
     * @param \Petrocki\IofXmlPhp\Model\OverallResultType $overallResult
     * @return self
     */
    public function setOverallResult(?\Petrocki\IofXmlPhp\Model\OverallResultType $overallResult = null)
    {
        $this->overallResult = $overallResult;
        return $this;
    }

    /**
     * Gets as course
     *
     * Defines the course assigned to the person.
     *
     * @return \Petrocki\IofXmlPhp\Model\SimpleCourseType
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
     * @param \Petrocki\IofXmlPhp\Model\SimpleCourseType $course
     * @return self
     */
    public function setCourse(?\Petrocki\IofXmlPhp\Model\SimpleCourseType $course = null)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as splitTime
     *
     * Contains the times at each control of the course. Each control of the team member's course has to be defined in a SplitTime element, even if the control has not been punched. Start and finish times must not be present as SplitTime elements.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\SplitTimeType $splitTime
     */
    public function addToSplitTime(\Petrocki\IofXmlPhp\Model\SplitTimeType $splitTime)
    {
        $this->splitTime[] = $splitTime;
        return $this;
    }

    /**
     * isset splitTime
     *
     * Contains the times at each control of the course. Each control of the team member's course has to be defined in a SplitTime element, even if the control has not been punched. Start and finish times must not be present as SplitTime elements.
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
     * Contains the times at each control of the course. Each control of the team member's course has to be defined in a SplitTime element, even if the control has not been punched. Start and finish times must not be present as SplitTime elements.
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
     * Contains the times at each control of the course. Each control of the team member's course has to be defined in a SplitTime element, even if the control has not been punched. Start and finish times must not be present as SplitTime elements.
     *
     * @return \Petrocki\IofXmlPhp\Model\SplitTimeType[]
     */
    public function getSplitTime()
    {
        return $this->splitTime;
    }

    /**
     * Sets a new splitTime
     *
     * Contains the times at each control of the course. Each control of the team member's course has to be defined in a SplitTime element, even if the control has not been punched. Start and finish times must not be present as SplitTime elements.
     *
     * @param \Petrocki\IofXmlPhp\Model\SplitTimeType[] $splitTime
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
     * @param \Petrocki\IofXmlPhp\Model\ControlAnswerType $controlAnswer
     */
    public function addToControlAnswer(\Petrocki\IofXmlPhp\Model\ControlAnswerType $controlAnswer)
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
     * @return \Petrocki\IofXmlPhp\Model\ControlAnswerType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ControlAnswerType[] $controlAnswer
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
     * @param \Petrocki\IofXmlPhp\Model\ControlCardType $controlCard
     */
    public function addToControlCard(\Petrocki\IofXmlPhp\Model\ControlCardType $controlCard)
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
     * @return \Petrocki\IofXmlPhp\Model\ControlCardType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ControlCardType[] $controlCard
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
     * Defines the fees that the team member has been assigned.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\Petrocki\IofXmlPhp\Model\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * Defines the fees that the team member has been assigned.
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
     * Defines the fees that the team member has been assigned.
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
     * Defines the fees that the team member has been assigned.
     *
     * @return \Petrocki\IofXmlPhp\Model\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * Defines the fees that the team member has been assigned.
     *
     * @param \Petrocki\IofXmlPhp\Model\AssignedFeeType[] $assignedFee
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
     * Defines the services requested by the team member.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\Petrocki\IofXmlPhp\Model\ServiceRequestType $serviceRequest)
    {
        $this->serviceRequest[] = $serviceRequest;
        return $this;
    }

    /**
     * isset serviceRequest
     *
     * Defines the services requested by the team member.
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
     * Defines the services requested by the team member.
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
     * Defines the services requested by the team member.
     *
     * @return \Petrocki\IofXmlPhp\Model\ServiceRequestType[]
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * Defines the services requested by the team member.
     *
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
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

