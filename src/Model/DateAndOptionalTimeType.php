<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing DateAndOptionalTimeType
 *
 * Defines a point in time which either is known by date and time, or just by date. May be used for event dates, when the event date is decided before the time of the first start.
 * XSD Type: DateAndOptionalTime
 */
class DateAndOptionalTimeType
{
    /**
     * The date part, expressed in ISO 8601 format.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * The time part, expressed in ISO 8601 format.
     *
     * @var \DateTime $time
     */
    private $time = null;

    /**
     * Gets as date
     *
     * The date part, expressed in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date part, expressed in ISO 8601 format.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as time
     *
     * The time part, expressed in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * The time part, expressed in ISO 8601 format.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(?\DateTime $time = null)
    {
        $this->time = $time;
        return $this;
    }
}

