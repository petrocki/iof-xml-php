<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing SplitTimeType
 *
 * Defines a split time at a control.
 * XSD Type: SplitTime
 */
class SplitTimeType
{
    /**
     * The status of the split time.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The code of the control.
     *
     * @var string $controlCode
     */
    private $controlCode = null;

    /**
     * The time, in seconds, elapsed from start to punching the control. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var float $time
     */
    private $time = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as status
     *
     * The status of the split time.
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
     * The status of the split time.
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
     * Gets as controlCode
     *
     * The code of the control.
     *
     * @return string
     */
    public function getControlCode()
    {
        return $this->controlCode;
    }

    /**
     * Sets a new controlCode
     *
     * The code of the control.
     *
     * @param string $controlCode
     * @return self
     */
    public function setControlCode($controlCode)
    {
        $this->controlCode = $controlCode;
        return $this;
    }

    /**
     * Gets as time
     *
     * The time, in seconds, elapsed from start to punching the control. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
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
     * The time, in seconds, elapsed from start to punching the control. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
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

