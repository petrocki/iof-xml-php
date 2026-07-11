<?php

namespace IofXmlPhp\Model\CourseData;

use IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing CourseDataAType
 */
class CourseDataAType extends BaseMessageElementType
{
    /**
     * The event that the course data belongs to.
     *
     * @var \IofXmlPhp\Model\EventType $event
     */
    private $event = null;

    /**
     * The course data for each race; one element per race in the event.
     *
     * @var \IofXmlPhp\Model\RaceCourseDataType[] $raceCourseData
     */
    private $raceCourseData = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as event
     *
     * The event that the course data belongs to.
     *
     * @return \IofXmlPhp\Model\EventType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The event that the course data belongs to.
     *
     * @param \IofXmlPhp\Model\EventType $event
     * @return self
     */
    public function setEvent(\IofXmlPhp\Model\EventType $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as raceCourseData
     *
     * The course data for each race; one element per race in the event.
     *
     * @return self
     * @param \IofXmlPhp\Model\RaceCourseDataType $raceCourseData
     */
    public function addToRaceCourseData(\IofXmlPhp\Model\RaceCourseDataType $raceCourseData)
    {
        $this->raceCourseData[] = $raceCourseData;
        return $this;
    }

    /**
     * isset raceCourseData
     *
     * The course data for each race; one element per race in the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRaceCourseData($index)
    {
        return isset($this->raceCourseData[$index]);
    }

    /**
     * unset raceCourseData
     *
     * The course data for each race; one element per race in the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRaceCourseData($index)
    {
        unset($this->raceCourseData[$index]);
    }

    /**
     * Gets as raceCourseData
     *
     * The course data for each race; one element per race in the event.
     *
     * @return \IofXmlPhp\Model\RaceCourseDataType[]
     */
    public function getRaceCourseData()
    {
        return $this->raceCourseData;
    }

    /**
     * Sets a new raceCourseData
     *
     * The course data for each race; one element per race in the event.
     *
     * @param \IofXmlPhp\Model\RaceCourseDataType[] $raceCourseData
     * @return self
     */
    public function setRaceCourseData(array $raceCourseData)
    {
        $this->raceCourseData = $raceCourseData;
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

