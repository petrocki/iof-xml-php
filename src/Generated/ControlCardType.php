<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing ControlCardType
 *
 * The unique identifier of the control card, i.e. card number.
 * XSD Type: ControlCard
 */
class ControlCardType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The manufacturer of the punching system, e.g. 'SI' or 'Emit'.
     *
     * @var string $punchingSystem
     */
    private $punchingSystem = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

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
     * Gets as punchingSystem
     *
     * The manufacturer of the punching system, e.g. 'SI' or 'Emit'.
     *
     * @return string
     */
    public function getPunchingSystem()
    {
        return $this->punchingSystem;
    }

    /**
     * Sets a new punchingSystem
     *
     * The manufacturer of the punching system, e.g. 'SI' or 'Emit'.
     *
     * @param string $punchingSystem
     * @return self
     */
    public function setPunchingSystem($punchingSystem)
    {
        $this->punchingSystem = $punchingSystem;
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
}

