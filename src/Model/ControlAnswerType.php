<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing ControlAnswerType
 *
 * Defines the the selected answer, the correct answer and the time used on a Trail-O control.
 * XSD Type: ControlAnswer
 */
class ControlAnswerType
{
    /**
     * The answer that the competitor selected. If the competitor did not give any answer, use an empty string.
     *
     * @var string $answer
     */
    private $answer = null;

    /**
     * The correct answer. If no answer is correct, use an empty string.
     *
     * @var string $correctAnswer
     */
    private $correctAnswer = null;

    /**
     * The time in seconds used to give the answer, in case of a timed control. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
     *
     * @var float $time
     */
    private $time = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as answer
     *
     * The answer that the competitor selected. If the competitor did not give any answer, use an empty string.
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * The answer that the competitor selected. If the competitor did not give any answer, use an empty string.
     *
     * @param string $answer
     * @return self
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Gets as correctAnswer
     *
     * The correct answer. If no answer is correct, use an empty string.
     *
     * @return string
     */
    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    /**
     * Sets a new correctAnswer
     *
     * The correct answer. If no answer is correct, use an empty string.
     *
     * @param string $correctAnswer
     * @return self
     */
    public function setCorrectAnswer($correctAnswer)
    {
        $this->correctAnswer = $correctAnswer;
        return $this;
    }

    /**
     * Gets as time
     *
     * The time in seconds used to give the answer, in case of a timed control. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
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
     * The time in seconds used to give the answer, in case of a timed control. Fractions of seconds (e.g. 258.7) may be used if the time resolution is higher than one second.
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

