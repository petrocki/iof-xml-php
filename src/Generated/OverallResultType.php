<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing OverallResultType
 *
 *
 * XSD Type: OverallResult
 */
class OverallResultType
{
    /**
     * The time, in seconds, that is shown in the result list. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var float $time
     */
    private $time = null;

    /**
     * The time, in seconds, that the the person or team is behind the leader or winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var float $timeBehind
     */
    private $timeBehind = null;

    /**
     * The position in the result list for the person or team that the result belongs to. This element should only be present when the Status element is set to OK.
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
     * @var \Petrocki\IofXmlPhp\ScoreType[] $score
     */
    private $score = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

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
     * The time, in seconds, that the the person or team is behind the leader or winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
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
     * The time, in seconds, that the the person or team is behind the leader or winner. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
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
     * The position in the result list for the person or team that the result belongs to. This element should only be present when the Status element is set to OK.
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
     * The position in the result list for the person or team that the result belongs to. This element should only be present when the Status element is set to OK.
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
     * @param \Petrocki\IofXmlPhp\ScoreType $score
     */
    public function addToScore(\Petrocki\IofXmlPhp\ScoreType $score)
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
     * @return \Petrocki\IofXmlPhp\ScoreType[]
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
     * @param \Petrocki\IofXmlPhp\ScoreType[] $score
     * @return self
     */
    public function setScore(?array $score = null)
    {
        $this->score = $score;
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

