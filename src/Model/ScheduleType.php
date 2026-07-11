<?php

namespace IofXmlPhp\Model;

/**
 * Class representing ScheduleType
 *
 * Defines the schedule of sub-events that comprise the entire orienteering event, e.g. banquets, social events and awards ceremonies.
 * XSD Type: Schedule
 */
class ScheduleType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The start time of the sub-event.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The end time of the sub-event.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * The name or title of the sub-event.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The name of the place where the sub-event occurs.
     *
     * @var string $venue
     */
    private $venue = null;

    /**
     * The geographical position of the sub-event.
     *
     * @var \IofXmlPhp\Model\GeoPositionType $position
     */
    private $position = null;

    /**
     * Any extra information about the sub-event.
     *
     * @var string $details
     */
    private $details = null;

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
     * Gets as startTime
     *
     * The start time of the sub-event.
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
     * The start time of the sub-event.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time of the sub-event.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end time of the sub-event.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(?\DateTime $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name or title of the sub-event.
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
     * The name or title of the sub-event.
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
     * Gets as venue
     *
     * The name of the place where the sub-event occurs.
     *
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Sets a new venue
     *
     * The name of the place where the sub-event occurs.
     *
     * @param string $venue
     * @return self
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * Gets as position
     *
     * The geographical position of the sub-event.
     *
     * @return \IofXmlPhp\Model\GeoPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The geographical position of the sub-event.
     *
     * @param \IofXmlPhp\Model\GeoPositionType $position
     * @return self
     */
    public function setPosition(?\IofXmlPhp\Model\GeoPositionType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as details
     *
     * Any extra information about the sub-event.
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Any extra information about the sub-event.
     *
     * @param string $details
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }
}

