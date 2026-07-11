<?php

namespace IofXmlPhp\Model;

/**
 * Class representing ScoreType
 *
 * The score earned in an event for some purpose, e.g. a ranking list. The 'type' attribute is used to specify which purpose.
 * XSD Type: Score
 */
class ScoreType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

