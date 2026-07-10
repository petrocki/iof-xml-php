<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing StartNameType
 *
 *
 * XSD Type: StartName
 */
class StartNameType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ordinal number of the race that the information belongs to for a multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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
}

